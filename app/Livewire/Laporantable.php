<?php

namespace App\Livewire;

use App\Models\Laporan;
use Livewire\Component;
use Livewire\WithPagination;

class Laporantable extends Component
{
    public $statusArray = []; // Array untuk menyimpan status per laporan

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // Listener untuk event yang diemit dari komponen lain
    protected $listeners = ['laporanAdded' => '$refresh'];

    public function mount()
    {
        $laporans = Laporan::all();
        foreach ($laporans as $laporan) {
            // Set status di array berdasarkan laporan
            $this->statusArray[$laporan->id] = $laporan->status;
        }
    }

    public function render()
    {
        $laporans = Laporan::orderBy('id', 'desc')->paginate(5);

        return view('livewire.laporantable', [
            'laporans' => $laporans,
        ]);
    }

    public function updatestatus($laporanId)
    {
        $laporan = Laporan::find($laporanId);
        if ($laporan) {
            // Pastikan bahwa yang diperbarui hanya laporan dengan ID yang diberikan
            $laporan->status = $this->statusArray[$laporanId];
            $laporan->save();

            // Reset status hanya untuk laporan yang baru saja diperbarui
            $this->statusArray[$laporanId] = $laporan->status;

            session()->flash('success', 'Status berhasil diperbarui.');
        } else {
            session()->flash('error', 'Laporan tidak ditemukan.');
        }
    }


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
}
