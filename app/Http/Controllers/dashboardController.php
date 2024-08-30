<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use App\Models\Pendaki;
use App\Models\Sampah;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $laporanmasuk = Laporan::where('status', 'pending')->count();
        $laporanproses = Laporan::where('status', 'procecing')->count();
        $laporanselesai = Laporan::where('status', 'done')->count();
        $pendaki = Pendaki::count();
        $sampah = Sampah::sum('amount');
        return view('layout.dashboard', compact('laporanmasuk','laporanproses','laporanselesai','pendaki', 'sampah'));
    }



   
}
