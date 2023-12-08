<?php


namespace App\Http\Controllers;


class FrontController extends Controller
{

    public function home(){
        return view('home', []);

    }
    public function documentation(){
        return view('documentation', []);

    }
    public function about_us(){
        return view('about_us', []);

    }
    public function contact_us(){
        return view('contact_us', []);

    }
    public function register(){
        return view('register', []);

    }
    public function welcome(){
        return view('welcome', []);

    }
}
