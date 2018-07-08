<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/3/2018
 * Time: 8:38 AM
 */

namespace Ejabberd\Commands\Contracts;


interface IEjabberdCommand
{
    public function getCommandName();

    public function getCommandData();
}