<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ProductDeleteCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'productDelete:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        Product::truncate();
        \Log::info("Deleted");
        
        // return 0;
    }
}
