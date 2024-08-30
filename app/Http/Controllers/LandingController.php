<?php

namespace App\Http\Controllers;
use App\Models\Pendaki;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index()
    {
        $pendaki = Pendaki::count();
        $pendakiblacklist = Pendaki::where('status', 'BlackList')->paginate(10);
        return view('landing.home.landing', compact('pendaki','pendakiblacklist'));
    }

    
}
