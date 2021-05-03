<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function savelogin(AdminLoginRequest $request)
    {
        $rem=request()->has('remember_me') ? true : false ;
        if (auth()->guard('admin')->attempt(['email'=> $request->email , 'password'=> $request->password], $rem )) {

            return redirect()->route('admin.dashboard');

        } else {
            return redirect()->back()->with(['error'=>'هناك خطا بالبيانات']);
        }

    }
}

