<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:08 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetRoomAffiliation implements IEjabberdCommand
{
    private $name;
    private $service;
    private $user;

    public function __construct($user, $name, $service)
    {
        $this->name = $name;
        $this->service = $service;
        $this->user = $user;
    }

    public function getCommandName()
    {
        return 'get_room_affiliation';
    }

    public function getCommandData()
    {
        return [
            'name' => $this->name,
            'service' => $this->service,
            'jid' => $this->user
        ];
    }
}