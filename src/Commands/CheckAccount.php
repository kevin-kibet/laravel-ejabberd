<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:08 PM
 */


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class CheckAccount implements IEjabberdCommand
{

    function getCommandName()
    {
        return 'check_account';
    }

    function getCommandData()
    {
        return [
            'user' => '',
            'host' => ''
        ];
    }
}