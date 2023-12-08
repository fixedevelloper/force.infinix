<?php


namespace App\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class BscScanService
{
    /**
     * @param $address
     * @return mixed
     * @throws GuzzleException
     */
    static function getBNBBalanceSingle($address)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'account', 'action' => 'balance',
                'address' => $address]]);
        return json_decode($res->getBody(), true);
    }

    static function getBNBBalanceMulti($addresses)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'account', 'action' => 'balancemulti',
                'tag' => 'latest',
                'address' => $addresses]]);
        return json_decode($res->getBody(), true);
    }

    static function getListTransactionNormalByAdress($address,$page,$offset,$sort)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'account',
                'action' => 'txlist', 'startblock' => '0',
                'endblock' => '99999999','page' => $page,
                'offset' => $offset,
                'sort'=>$sort, // asc,desc
                'address' => $address]]);
        return json_decode($res->getBody(), true);
    }
    static function getListTransactionInternalByAdress($address,$page,$offset,$sort)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'account',
                'action' => 'txlistinternal', 'startblock' => '0',
                'endblock' => '99999999','page' => $page,
                'offset' => $offset,
                'sort'=>$sort, // asc,desc
                'address' => $address]]);
        return json_decode($res->getBody(), true);
    }
    static function getListTransactionInternalByHash($txhash)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'account',
                'action' => 'txlistinternal',
                'txhash' => $txhash]]);
        return json_decode($res->getBody(), true);
    }
    static function getListTransactionInternalBlock($txhash,$page,$offset,$sort)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'account',
                'action' => 'txlistinternal', 'startblock' => '0',
                'endblock' => '99999999','page' => $page,
                'offset' => $offset,
                'sort'=>$sort, // asc,desc
                'txhash' => $txhash]]);
        return json_decode($res->getBody(), true);
    }
    static function getContratABI($address)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"), 'module' => 'contract', 'action' => 'getabi',
                'address' => $address]]);
        return json_decode($res->getBody(), true);
    }
    static function getContratABISource($address)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"),
                'module' => 'contract',
                'action' => 'getsourcecode',
                'address' => $address]]);
        return json_decode($res->getBody(), true);
    }
    static function getContratCreated($contractaddresses)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"),
                'module' => 'contract',
                'action' => 'getsourcecode',
                'contractaddresses' => $contractaddresses]]);
        return json_decode($res->getBody(), true);
    }
    static function getContratSourForVerivied($address)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"),
                'module' => 'contract',
                'action' => 'getsourcecode',
                'address' => $address]]);
        return json_decode($res->getBody(), true);
    }
    static function postVerifiedCode($contractaddress,$sourceCode,$codeformat,$contractname)
    {
        $options = [
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('POST', env("BSCAN_URL") . '/',
            ['query' => ['apikey' => env("BSCAN_API"),
                'module' => 'contract',
                'action' => 'verifysourcecode',
                'sourceCode' => $sourceCode,
                'codeformat' => $codeformat,
                'contractname' => $contractname,
                'contractaddress' => $contractaddress]]);
        return json_decode($res->getBody(), true);
    }
}
