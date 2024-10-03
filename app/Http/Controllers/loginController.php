<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
     public function index() 
     {
        return view("auth.login");
     }

     public function login(Request $request)
     {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return $this->authenticated($request, Auth::user());
            
        }

        return redirect()->back()->with('eror', 'Email atau password anda salah');


     }
    // Di loginController, setelah login berhasil:
    protected function authenticated(Request $request, $user)
    {
        if ($user->type == 1) {
            return redirect()->route('laporan1'); // Arahkan User ke laporan
        } elseif ($user->type == 2) {
            return redirect()->route('dashboard'); // Arahkan Admin ke dashboard
        }
    }

}
