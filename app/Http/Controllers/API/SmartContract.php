<?php


namespace App\Http\Controllers\API;


use App\Services\BscScanService;
use Illuminate\Http\Request;

class SmartContract extends BaseController
{
    public function getABI(Request $request){
        $abis=BscScanService::getContratABI(env('BSCAN_ADDRESS'));
        return $this->sendResponse($abis, 'request successfully.');
    }
}
