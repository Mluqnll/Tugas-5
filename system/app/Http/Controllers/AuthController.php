<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pembeli;

class AuthController extends Controller
{

    public function login(){
        return View ('admin.login');
    }


    public function loginproses(){
        if (auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('admin')->with('primary', 'Anda Berhasil Login');
        }
        
        if (auth()->guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('web')->with('primary', 'Anda Berhasil Login');
        }
        else{
            return back()->with('danger', 'Usah Sembarangan Password diingat');
        }

       

        return redirect('login');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

}
