<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Pendaki;
class PendakiController extends Controller
{
    public function index(){
        $pendaki = Pendaki::get();
        return view('admin.pendaki.index', compact('pendaki'));
    }

     public function create(){

        return view('admin.pendaki.create');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required|max:16',
            'ktp' => 'required|min:16|max:16'
        ]);

        if($validator->fails()){
          redirect()->route('pendaki.create')->with(['error' => 'data gagal disimpan']);
        }

        $pendaki = Pendaki::create([
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp,
            'ktp' => $request->ktp,
        ]);
    return  redirect()->route('pendaki')->with(['succes', 'data berhasil disimpan']);
    }

    public function edit($id)
    {
        $pendaki = Pendaki::where('id', $id)->first();

        return view('admin.pendaki.edit', compact('pendaki'));
    }

    public function update(Request $request, Pendaki $pendaki, $id)
    {
        $pendaki = Pendaki::find($id);
        $pendaki->name = $request->name;
        $pendaki->address = $request->address;
        $pendaki->telp = $request->telp;
        $pendaki->ktp = $request->ktp;
        $pendaki->status = $request->status;
        $pendaki->save();

     return  redirect()->route('pendaki')->with(['succes', 'data berhasil disimpan']);
    }

    public function destroy($id)
    {
        $pendaki = Pendaki::find($id);

        $pendaki->delete();
        
        return  redirect()->route('pendaki')->with(['succes', 'data berhasil dihapus']);

    }
}

