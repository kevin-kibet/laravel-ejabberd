<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:09 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class ConnectedUsers implements IEjabberdCommand
{

    /**
     * @var bool
     */
    private $full_info;

    public function __construct($full_info = false)
    {

        $this->full_info = $full_info;
    }

    function getCommandName()
    {
        return $this->full_info ? 'connected_users_info' : 'connected_users';
    }

    function getCommandData()
    {
        return [];
    }
}