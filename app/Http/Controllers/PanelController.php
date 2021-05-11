<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index()
    {
        return 'admin dashboard';
    }

    public function login()
    {
        $settings = Settings::first();
        return view('login', [
            'settings' => $settings,
        ]);
    }

    public function loginControl(Request $request)
    {
        $mail       = $request->email;
        $password   = $request->password;
        $remember   = $request->remember;
        if (Auth::attempt(['email' => $mail, 'password' => $password], $remember)) {
            return redirect(route('panel.index'))->withLogged('successfully logged in');
        } else {
            return redirect()->back()->withError('error logged in');
        }
    }
}
