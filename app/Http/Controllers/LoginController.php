<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function profile(){
        $id = auth()->user()->userId;
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }

    public function update(Request $req, $id){
        

    }

    //
}
