<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
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
                return redirect()->route('admin.account.index');
            }
            $checkLogin = true;
            $mailAdr = $credentials['mail_adr'];
        }

        return view('admin::authenticate.login', compact('mailAdr', 'checkLogin'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
                ->withErrors(['email' => __($status)]);
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
