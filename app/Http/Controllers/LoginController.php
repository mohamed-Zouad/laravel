<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session;

class LoginController extends Controller
{
    public function showlogin(){
        return view("showLogin");
    }
    public function login(Request $request){

        $nomuser = $request->input("nomuser");
        $password = $request->input("password");

            return view('/login' , ['nomuser'=> $nomuser , 'password'=> $password]);
        }
};
