<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
       $data =  $request->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u|unique:users',
            'username' => 'required|unique:users|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        //$request->session()->flash('success', 'Registrasi Berhasil!, Silahkan Login');

        return redirect('login')->with('success', 'Registrasi Berhasil!, Silahkan Login');
    }
}
