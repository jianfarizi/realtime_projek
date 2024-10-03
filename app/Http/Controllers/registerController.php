<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

     public function store(Request $request)
    {

       
        $user = user::create([
            'name' => $request->name,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
            'address' => $request->address,
            'type' => $request->type,
            'password' => Hash::make($request->password)

        ]);

        if($user){
            return redirect()->route('login')->with('succes', 'Register Berhasil');
        }else{
            return redirect()->back()->with('eror', 'Register gagal, Silakan coba lagi');
        }
    }
}
