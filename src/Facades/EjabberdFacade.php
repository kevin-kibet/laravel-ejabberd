<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/3/2018
 * Time: 8:36 AM
 */

namespace Ejabberd\Facades;


use Ejabberd\Ejabberd;
use Illuminate\Support\Facades\Facade;

class EjabberdFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return Ejabberd::class;
    }
}