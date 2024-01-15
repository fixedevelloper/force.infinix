<?php


namespace App\Http\Controllers;


use App\Models\ActivationLevel;
use App\Models\Lottory;
use App\Models\User;
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
    public function lmodel1(Request $request){
        $participants=Lottory::query()->orderByDesc('id')->get();
        $isLogged=false;
        $id= $request->get("id");
        if(Session::get("id_connect")==$id){
            $isLogged=true;
        }
        $user=User::query()->firstWhere(['id_contract'=>$id]);
        if (is_null($user)){
            $activate_level=null;
        }else{
            $activate_level=ActivationLevel::query()->firstWhere(['address'=>$user->address]);
        }
        return view('lmodel1', [
            "participants"=>$participants,
            "id"=>$id,
            "isLogged"=>$isLogged,
            "user"=>$user,
            "activate_level"=>$activate_level
        ]);

    }
    public function modelRegister(){
        return view('register_next', []);

    }
    public function modelHome(){
        return view('next_home', []);

    }
    public function modelPreview(Request $request){
        $isLogged=false;
        $id= $request->get("id");
        $type= $request->get("type");
        if(Session::get("id_connect")==$id){
            $isLogged=true;
        }
        $user=User::query()->firstWhere(['id_contract'=>$id]);
        if (is_null($user)){
            $activate_level=null;
        }else{
            $activate_level=ActivationLevel::query()->firstWhere(['address'=>$user->address]);
        }
        logger($activate_level);
        return view('next_preview', [
            "id"=>$id,
            "isLogged"=>$isLogged,
            "user"=>$user,
            "activate_level"=>$activate_level,
            "type"=>$type
        ]);
    }
    public function next_login(){
        return view('next_login', []);
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
