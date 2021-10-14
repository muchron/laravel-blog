<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:255',
        ]);
        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);

        return redirect('/login')->with('success', 'Registration was successfull, Please Login !!!');
    }
}
