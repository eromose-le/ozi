<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'number' => 'required|min:11',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name'=>$req->name,
            'username'=>$req->username,
            'number'=>$req->number,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
        ]);

        auth()->attempt($req->only('email', 'password'));

        return redirect()->route('campaignform');
    }
}
