<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLoginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtEmail' => 'required',
                'txtPassword' => 'required',
            ],
            [
                'txtEmail.required' => 'Bạn chưa nhập email',
                'txtPassword.required' => 'Bạn chưa nhập mật khẩu',
            ]
        );

        if (Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword])) {
            return redirect('/thanhnguyenduyy');
        } else {
            return redirect()->back()->with('error', 'Sai email hoặc mật khẩu');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('thanhnguyenduyy/dang-nhap');
    }
}
