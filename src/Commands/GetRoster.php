<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:06 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetRoster implements IEjabberdCommand
{
    private $user;
    private $server;

    public function __construct($user, $server)
    {
        $this->user = $user;
        $this->server = $server;
    }

    public function getCommandName()
    {
        return 'get_roster';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'server' => $this->server,
        ];
    }
}