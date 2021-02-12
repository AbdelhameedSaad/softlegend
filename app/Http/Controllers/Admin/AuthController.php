<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }
    
    public function doLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191',
            'password' => 'required|string'
        ]);

        if (! Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return back();
        } else {
            return redirect(route('admin.homepage'));
        }
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(route('admin.login'));
    }

}
