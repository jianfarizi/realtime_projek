<?php

namespace App\Http\Controllers;
use App\Models\Sampah;
use App\Models\Pendaki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SampahController extends Controller
{
    public function index ()

    {
        $sampah = Sampah::with('pendakis')->get();
        return view('admin.sampah.index', compact('sampah'));
    }

    public function create()
    {
        $pendaki = Pendaki::all();
        return view('admin.sampah.create', compact('pendaki'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
           'id_pendaki' => 'required|string',
            'type' => 'required|array',
            'type.*' => 'string|max:255',
            'amount' => 'required|numeric'
        ]);
          if($validator->fails()){
          redirect()->route('sampah.create')->with(['error' => 'data gagal disimpan']);
        }
         $pendaki = Pendaki::where('name', $request->id_pendaki)->first();

      
    if (!$pendaki) {
        return redirect()->route('sampah.create')->with(['error' => 'Pendaki tidak ditemukan'])->withInput();
    }

         $types = $request->input('type');
         $type = !empty($types) ? join(',', $types) : '';

        $sampah = Sampah::create([
            'id_pendaki' => $pendaki->id,
            'type' => $type,
            'amount' => $request->amount,
        ]);
        

       
        return redirect()->route('sampah')->with(['success', 'data berhasil ditambah']);
    }

    public function destroy($id)
    {
        $sampah = Sampah::find($id);

        $sampah->delete();

        return redirect()->route('sampah')->with(['success', 'data berhasil dihapus']);
    }
}
