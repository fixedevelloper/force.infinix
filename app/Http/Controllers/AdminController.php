<?php


namespace App\Http\Controllers;


use App\Models\User;
use App\Services\BscScanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function dashboard(Request $request){


        $user=User::query()->firstWhere(['id_contract'=>$request->get('id')]);
        if ($request->method()=='POST'){
            if (is_null($user)){
                $user=new User();
                $user->id_contract=$request->get('id');
                $user->address_parent=$request->get('id_parent');
            }
            $user->name=$request->get('username');
            logger($user);
            $user->save();
        }
        if (is_null(Session::get("user_id"))){
            Session::put('user_id',$request->get('id'));
            Session::put('user_name',is_null($user)?'':$user->name);
        }
        $id=$request->get('id');
        $link=route('register',['tx'=>$id]);
        return view('admin.dashboard', [
            'id'=>$id,
            'link'=>$link,
            'user'=>$user
        ]);
    }
    public function dashboardcss(){
        //  $account=BscScanService::getBNBBalanceSingle("0x70F657164e5b75689b64B7fd1fA275F334f28e18");
        //$source=BscScanService::getContratABISource("0x0e09fabb73bd3ade0a17ecc321fd13a19e81ce82");
        //logger($source);
        return view('admin.dashboardcss', []);
    }
    public function create_user(){
        return view('admin.create_user', []);

    }
    public function buy_machin(){
        return view('admin.buy_machin', []);

    }
    public function login(){
        return view('login', []);

    }
    public function partners(){

        return view('admin.partners', [
            'id'=>Session::get("user_id")
        ]);

    }
    public function links(){
        return view('admin.links', []);

    }
    public function statitics(){
        return view('admin.statistics', []);
    }
    public function preview(Request $request){
        $id=$request->get('id');
        return view('admin.preview', [
            'id'=>$id,
        ]);
    }
}
