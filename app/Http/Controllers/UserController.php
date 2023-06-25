<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Show', [
            'extendedAccess' => Auth::user()->role_id === 1,
            'users' => User::join('roles as r', 'role_id',  '=', 'r.id')->get()
        ]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            return redirect('/admin/products');
        } else {
            return Inertia::render('Auth/Login', [
                'message' => 'Неверный логин или пароль'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }

    public function authStatus(Request $request)
    {
        return response()->json(Auth::check());
    }
}
