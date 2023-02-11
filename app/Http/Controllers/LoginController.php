<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('user')->attempt($input)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        } elseif (Auth::guard('siswa')->attempt(['nis' => $input['username'], 'password' => $input['password']])) {
            $request->session()->regenerate();
            return redirect()->intended(route('histori'));
        }

        return back()->with('error', 'login belum berhasil');
    }

    public function logout()
    {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        } elseif ((Auth::guard('siswa')->check())) {
            Auth::guard('siswa')->logout();
        }

        session()->regenerateToken();
        return redirect('/')->with('success', 'logout berhasil');
    }
}
