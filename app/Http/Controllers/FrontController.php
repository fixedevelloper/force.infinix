<?php


namespace App\Http\Controllers;


use App\Models\Lottory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{

    public function home(){
        return view('home', []);

    }
    public function documentation(){
        return view('documentation', []);

    }
    public function lmodel1(){
        $participants=Lottory::query()->orderByDesc('id')->get();;
        return view('lmodel1', [
            "participants"=>$participants
        ]);

    }

    public function lmodel2(){
        return view('lmodel2', []);

    }
    public function about_us(){
        return view('about_us', []);

    }
    public function contact_us(){
        return view('contact_us', []);

    }
    public function register(Request $request){
        return view('register', [
            'id'=>$request->get('tx')
        ]);

    }
    public function login(){
        Session::remove('user_id');
        return view('login', []);

    }
    public function loginwithaddress(){
        return view('loginwithaddress', []);

    }
    public function welcome(){
        return view('welcome', []);

    }
}
