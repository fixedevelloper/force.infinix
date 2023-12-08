<?php


namespace App\Http\Controllers;


use App\Services\BscScanService;

class AdminController extends Controller
{

    public function dashboard(){
      //  $account=BscScanService::getBNBBalanceSingle("0x70F657164e5b75689b64B7fd1fA275F334f28e18");
        //$source=BscScanService::getContratABISource("0x0e09fabb73bd3ade0a17ecc321fd13a19e81ce82");
        //logger($source);
        return view('admin.dashboard', []);
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
    public function preview(){
        return view('admin.preview', []);
    }
}
