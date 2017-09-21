<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 15.09.17
 * Time: 14:56
 */

namespace App\Console;

use App\Basket\EdekaProductCrawler;
use App\Product;
use Illuminate\Console\Command;

class EdekaExportCommand extends Command
{
    protected $signature = 'export:edeka';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Read data from Edeka to database';

    public function handle()
    {

        $crawler = new EdekaProductCrawler();
       $crawler->getProductsName();
        $crawler->getDescription();


    }
}