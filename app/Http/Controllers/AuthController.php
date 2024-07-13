<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function loginView()
    {
        if (Auth::user() != null) {
            return redirect()->route('dashboard');
        }
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->messages());
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::where('email', Auth::user()->email)->first();
            Auth::login($user);

            if (Auth::user()->status == 0) {
                Session::put('user', $user);
                return redirect()->route('dashboard')->with([
                    'icon' => 'success',
                    'title' => 'Operation réussie',
                    'text' => 'Connexion effectuée avec succès. Bienvenue ' . Auth::user()->name,
                ]);
            } else {
                Auth::logout();
                return back()->withErrors([
                    'message' => 'Identifiants invalides. Votre compte est désactivé.',
                ]);
            }
        } else {
            return back()->withErrors([
                'message' => 'Identifiants invalides. Veuillez réessayer.',
            ]);
        }
    }

    public function registerView()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.view')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login.view');
    }
}
