<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Register;
use App\Models\reguser;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $register = $request->only(['name', 'email', 'password']);
        User::create($register);
        return view('auth.login');
    }
    public function login()
    {
        return view('index');
    }
}
