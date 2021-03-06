<?php

namespace App\Http\Controllers\ComputerCenterPanel;

use Auth;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUsers\AdminUser;

class AuthController extends Controller
{
    public function login() 
    {   
        if (Auth::guard("computercenter")->check())
        {
            return redirect()->route('computo.home');
        }  
        return view('ComputerCenterPanel.Auth.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('password');

        $user = AdminUser::where('email', "=" ,$email)->first();

        if (!$user) {
            session()->flash('messages', 'error|No Existe un usuario con ese correo');
            return redirect()->back();
        }

        if (Auth::guard('computercenter')->attempt(['email' => $email, 'password' => $pass],$request->get('remember-me', 0)))
        {
            return redirect()->route('computo.home');
        }
        session()->flash('messages', 'error|El password es incorrecto');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::guard('computercenter')->logout();
        session()->flush();
        return redirect('/computo');
    }
}