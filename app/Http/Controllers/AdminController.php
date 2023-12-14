<?php


namespace App\Http\Controllers;


use App\Services\BscScanService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(Request $request){
      //  $account=BscScanService::getBNBBalanceSingle("0x70F657164e5b75689b64B7fd1fA275F334f28e18");
        //$source=BscScanService::getContratABISource("0x0e09fabb73bd3ade0a17ecc321fd13a19e81ce82");
        //logger($source);
        $id=$request->get('id');
        $link=route('register',['tx'=>$id]);
        return view('admin.dashboard', [
            'id'=>$id,
            'link'=>$link
        ]);
    }
    public function dashboardcss(){
        //  $account=BscScanService::getBNBBalanceSingle("0x70F657164e5b75689b64B7fd1fA275F334f28e18");
        //$source=BscScanService::getContratABISource("0x0e09fabb73bd3ade0a17ecc321fd13a19e81ce82");
        //logger($source);
        return view('admin.dashboardcss', []);
    }
    public function login(){
        return view('login', []);

    }
    public function partners(){
        return view('admin.partners', []);

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
