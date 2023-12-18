<?php


namespace App\Services;


use Web3\Contract;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Web3;

class Web3Service
{
    protected $web3;

    protected $contract;
    protected $abi;

    /**
     * Web3Service constructor.
     */
    public function __construct()
    {
        $this->abi = file_get_contents(public_path('contract/contract.json'));
        $this->web3 = new Web3(new HttpProvider(new HttpRequestManager(env('APP_URL'), 0.1)));
        //  $this->web3=new Web3(new HttpProvider(new HttpRequestManager(env('APP_URL'))));
        $this->contract = new Contract($this->web3->getProvider(), $this->abi);
    }

    public function AddressToID($address)
    {
        $this->contract->at(env('INFINIX_ADDRESS'))->call('userIDs', $address, function ($err, $result) {
            logger($err);
        });
    }

    public function IDToAddress($id)
    {
        $accounts=$this->web3->getEth()->accounts;
        logger($accounts);
      /*  $this->contract->at(env('INFINIX_ADDRESS'))->call('idToAddress', $id, function ($err, $result) {
            logger($err);
        });*/

    }
}
