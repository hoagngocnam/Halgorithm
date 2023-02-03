<?php

namespace Modules\Stores\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Http\Requests\Authenticate\LoginRequest;

class AuthenticateController extends Controller
{
    /**
     * Màn hình Đăng nhập
     */
    public function login(LoginRequest $request)
    {
        if (Auth::guard('admin')->check()) {
            return back();
        }
        $mailAdr = '';
        $checkLogin = null;
        if ($request->isMethod('post')) {
            $credentials = $request->only(['mail_adr', 'password']);
            if (Auth::guard('admin')->attempt($credentials)) {
                // $request->session()->regenerate();
                return redirect()->route('admin.account.list');
            }
            $checkLogin = true;
            $mailAdr = $credentials['mail_adr'];
        }

        return view('admin::authenticate.login', compact('mailAdr', 'checkLogin'));
    }

    /**
     * Màn hình Đăng xuất
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.authenticate.login');
    }
}
