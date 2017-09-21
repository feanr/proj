<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13.09.17
 * Time: 17:26
 */

namespace App\Http\Controllers;

use App\Basket\Shop as Kalkulator;


class HaloController extends Controller
{
    public function hallo($name)
    {
        $shop = new Kalkulator();
        return 'Hi '.$name .' Quadrat from 4 = '.$shop->quadrat(4) ;
    }
}