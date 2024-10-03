<?php

namespace App\Livewire;
use App\Models\Laporan;
use App\Models\Pendaki;
use App\Models\Sampah;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $laporanmasuk = Laporan::where('status', 'pending')->count();
        $laporanproses = Laporan::where('status', 'procecing')->count();
        $laporanselesai = Laporan::where('status', 'done')->count();
        $pendaki = Pendaki::count();
        $sampah = Sampah::sum('amount');
        return view('livewire.dashboard-component',[
           'laporanmasuk' =>  Laporan::where('status', 'pending')->count(),
           'laporanproses' => Laporan::where('status', 'procecing')->count(),
           'laporanselesai' => Laporan::where('status', 'done')->count(),
           'pendaki' => Pendaki::count(),
           'sampah' => Sampah::sum('amount')
        ]);
    }
}
