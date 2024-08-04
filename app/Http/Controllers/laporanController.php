<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::paginate(10);

        return view('admin.laporan.index');
    }

    public function create()
    {
         return view('admin.laporan.create');
    }

}