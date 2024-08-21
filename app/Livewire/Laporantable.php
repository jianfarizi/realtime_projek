<?php

namespace App\Livewire;

use App\Models\Laporan;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;




class Laporantable extends Component
{
//  public $image_file;
 public $name, $pelapor, $desc, $category, $image_file, $id, $status;

    public function render()
    {
        return view('livewire.laporantable',[
            'laporans' => Laporan::orderBy('id','desc')->paginate(10)
        ]);
    }

    // public function mount($image_file)
    // {
    //     $this->image_file = $image_file;
    // }
    public function delete($id)
{
    // Cari laporan berdasarkan ID
    $laporan = Laporan::find($id);

    // Periksa apakah laporan ditemukan
    if ($laporan) {
        // Ambil nama file gambar
        $imageFile = $laporan->image_file;

        // Hapus data dari database
        $laporan->delete();

        // Hapus file gambar dari penyimpanan jika file ada
        if ($imageFile) {
            $filePath = public_path('storage/' . $imageFile);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Beri notifikasi sukses
        session()->flash('success', 'Data berhasil dihapus.');
    } else {
        // Beri notifikasi jika data tidak ditemukan
        session()->flash('error', 'Data tidak ditemukan.');
    }
}
  public function laporandetail($id)
    {
        $laporan = Laporan::with('users')->find($id);
        if($laporan) {
            $this->id = $laporan->id;
            $this->pelapor = $laporan->users->name;
            $this->name = $laporan->name;
            $this->desc = $laporan->desc;
            $this->category = $laporan->category;
            $this->status = $laporan->status;
            $this->image_file = asset('storage/' . $laporan->image_file);

        }

        else{
             return redirect()->to('/laporan');
        }
    }
   
}
