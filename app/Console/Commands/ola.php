<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ola extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ola:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Visualisa mensagen de saudacao';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        echo "Ola, tudo  bem?";
    }
}
