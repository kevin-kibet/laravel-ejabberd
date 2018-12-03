<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/3/2018
 * Time: 8:36 AM
 */

namespace Ejabberd\Facades;


use Ejabberd\Commands\Contracts\IEjabberdCommand;
use Ejabberd\Ejabberd;
use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed execute(IEjabberdCommand $command)
 *
 * Class EjabberdFacade
 * @package Ejabberd\Facades
 */
class EjabberdFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return Ejabberd::class;
    }
}