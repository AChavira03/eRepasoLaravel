<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function login (){
        return view('login');
    }

    public function validarlogin (Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('password');

        if($user === 'UserAdmin' && $pass === '12345'){
            $url='home';
        } else{
            $url='login';
        }

        return view($url);
    }

    public function home (){
        return view('home');
    }

    public function vinci (){
        return view('daVinci');
    }

    public function dali (){
        return view('Dali');
    }

    public function miguelAngel (){
        return view('miguelAngel');
    }

    public function picasso (){
        return view('picasso');
    }

    public function vanGogh (){
        return view('vanGogh');
    }
}
