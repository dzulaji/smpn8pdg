<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Fungsi untuk memproses login
    public function authenticate(Request $request)
    {
        // 1. Strict Business Logic Validation
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // 2. Coba melakukan autentikasi
        if (Auth::attempt($credentials)) {
            // Jika sukses, regenerate session untuk menghindari celah keamanan Session Fixation
            $request->session()->regenerate();

            // Arahkan ke halaman dashboard admin (sementara kita arahkan ke '/' dulu karena dashboard belum ada)
            return redirect()->intended('/admin/dashboard');
        }

        // 3. Edge Case Handling: Jika gagal login (username/password salah)
        return back()->withErrors([
            'username' => 'Username atau password yang Anda masukkan salah.',
        ])->onlyInput('username');
    }

    // Fungsi untuk proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/portal-admin');
    }
}
