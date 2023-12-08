<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

        $users = User::latest()->get();

        return $users;
    }

    public function store(){
      return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' =>bcrypt(request('password'))
        ]);


    }

    public function update(user $user){

        $user->update([

            'name' => request('name'),
            'email' => request('email'),
            'password' => resquest('password') ? bcrypt(request('password')) :$user->password,

        ]);
        return $user;
    }
}
