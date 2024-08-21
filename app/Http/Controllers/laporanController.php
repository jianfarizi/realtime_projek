<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::with('users')->paginate(10);

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

}
