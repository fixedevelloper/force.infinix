<?php

namespace App\Console\Commands;

use App\Services\Web3Service;
use Illuminate\Console\Command;

class UpdateScore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-score';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $webService;

    /**
     * UpdateScore constructor.
     * @param $webService
     */
    public function __construct()
    {
        parent::__construct();
       // $this->webService = $webService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$this->webService->AddressToID("0x77Fd63a360918A27451Dd23d1705Eb7afc3A6087");
      //  $this->webService->IDToAddress(1);
    }
}
