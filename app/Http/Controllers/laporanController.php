<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class laporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::with('users')->get();

        return view('admin.laporan.index', compact('laporans'));
    }

    public function create()
    {
         return view('admin.laporan.create');
    }
    public function show()
    {
         return view('admin.laporan.show');
    }
    // public function store( Request $request)
    // {
    //      $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'desc' => 'required',
    //         'category' => 'required',
    //         'image_file' => 'file',
    //     ]);

    //     if($validator->fails()){
    //       redirect()->route('laporan.create')->with(['error' => 'data gagal disimpan']);
    //     }

    //     $req = $request->all();
    //     $req['user_id'] = User::auth()->id();
    //     $image = $request->file('image_file');
    //     if($image != null) {
    //         $image->storeAs('public/image_file', $image->hashName());
    //         $req['image_file'] = $image->hashName();
    //     }
    //     Laporan::create($req);

    //     session()->flash('success', 'data berhasil dikirim');
    // }

    // public function edit($id)
    // {
    //     $galeri = Galeri::where('id', $id)->first();

    //     return view('admin.galeri.edit', compact('galeri'));
    // }

    // public function update(Request $request, Galeri $galeri, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'image_file' => 'file'
    //     ]);

    //     if ($validator->fails()){
    //         redirect('galeri.edit')->with(['error' => 'data gagal disimpan']);
    //     }

    //     $galeri = Galeri::findOrFail($id);

    //     $req = $request->only('name');
    //     $image = $request->file('image_file');

    //     if($image != null){
    //         Storage::delete('public/image_file/' . $galeri->image_file);
    //         $image->storeAs('public/image_file' , $image->hashName());
    //         $req['image_file'] = $image->hashName();
    //     }

       
    //    $galeri->update($req);
      
 
    //     return redirect()->route('galeri')->with(['success' => 'data berhasil disimpan']);
    // }

    public function getLaporanData()
{
    $laporans = Laporan::with('users')->latest()->get();
    return response()->json($laporans);
}


}
