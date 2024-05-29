<?php

namespace App\Http\Controllers;

use App\Models\Apikey;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk melakukan otentikasi pengguna
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, arahkan ke dashboard atau halaman lain
            return redirect()->route('dashboard.index');
        }

        // Jika otentikasi gagal, kembali ke form login dengan pesan error
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);

        // Generate unique API key
        $apiKey = Uuid::uuid4()->toString();


        Apikey::create([
            'api_key' => $apiKey,
            'user_id' => $user->id,
        ]);

        Auth::login($user);

        return redirect('dashboard.index');
    }
}
