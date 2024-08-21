<?php

namespace App\Livewire;

use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;


class Laporancreate extends Component
{
    use WithFileUploads;



    public $name;
    public $desc;
    public $category;
    public $image_file;
    public $status;
    protected $rules = [
        'name' => 'required|',
        'desc' => 'required',
        'category' => 'required',
        'image_file' => 'required|',
    ];
    public function render()
    {
        return view('livewire.laporancreate');
    }

    public function store(Request $request)
    {
        $user = $request->user()->id;
       $validated = $this->validate();
     
            $image_file = $this->image_file->store('image_file','public');
       
       
        Laporan::create([
            'id_user' => Auth::id(),
            'name' => $this->name,
            'desc' => $this->desc,
            'category' => $this->category,
            'image_file' => $image_file
        ]);
        session()->flash('success', 'data berhasil dikirim');
        
       

    }
}


