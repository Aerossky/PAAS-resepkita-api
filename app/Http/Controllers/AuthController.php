<?php

namespace App\Http\Controllers;

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
        $ingredientController = new IngredientController();
        $ingredientController->totalIngredient();
        $userController = new UserController();
        $userController->totalUser();
            // Jika otentikasi berhasil, arahkan ke dashboard atau halaman lain
            $user = Auth::user();
            if ($user->role_id == "1") {
                // admin
                return redirect()->intended('/admin-dashboard');
            } elseif ($user->role_id == "2") {
                // user
                return redirect()->intended('/dashboard');
            }
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

        // Generate unique API key
        $apiKey = Uuid::uuid4()->toString();

        $user = User::create([
            'name' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'role_id' => 2,
            'api_key' => $apiKey,
        ]);

        // Generate unique API key
        Auth::login($user);

        return redirect()->route('dashboard.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();


        return redirect('login');
    }

    public function test(){
        return view('admin.dashboard');
    }
}
