<?php

namespace App\Http\Controllers;


use App\Events\LaporanUpdated;
use App\Events\MyEvent;
use App\Models\Galeri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
       
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {

        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image_file' => 'file',
        ]);

        if ($validator->fails()) {
            redirect()->route('galeri.create')->with(['error' => 'data gagal disimpan']);
        }

        $req = $request->all();
        $image = $request->file('image_file');
        if ($image != null) {
            $image->storeAs('public/image_file', $image->hashName());
            $req['image_file'] = $image->hashName();
        }
        $galeri=Galeri::create($req);

        $galeri1 = [
            'name' => $galeri->name,
            'image_file' => $galeri->image_file,
            'message' => Auth::user()->name . ' memasukan laporan'
        ];
        event(new MyEvent($galeri1));

        return  redirect()->back()->with(['succes', 'data berhasil disimpan']);
    }

    public function edit($id)
    {
        $galeri = Galeri::where('id', $id)->first();

        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image_file' => 'file'
        ]);

        if ($validator->fails()) {
            redirect('galeri.edit')->with(['error' => 'data gagal disimpan']);
        }

        $galeri = Galeri::findOrFail($id);

        $req = $request->only('name');
        $image = $request->file('image_file');

        if ($image != null) {
            Storage::delete('public/image_file/' . $galeri->image_file);
            $image->storeAs('public/image_file', $image->hashName());
            $req['image_file'] = $image->hashName();
        }


        $galeri->update($req);


        return redirect()->route('galeri')->with(['success' => 'data berhasil disimpan']);
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        if ($galeri) {
            // Hapus gambar jika ada
            if ($galeri->image_file && Storage::exists('public/image_file/' . $galeri->image_file)) {
                Storage::delete('public/image_file/' . $galeri->image_file);
            }

            $galeri->delete();

            return redirect()->route('galeri')->with('success', 'Data berhasil dihapus');
        }

        return redirect()->route('galeri')->with('error', 'Data tidak ditemukan');
    }

    public function tes()
    {
        event(new MyEvent('Edwin Farid'));
        

        
    }
}
