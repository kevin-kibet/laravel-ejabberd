<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:08 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetRoomOccupants implements IEjabberdCommand
{
    private $name;
    private $service;

    public function __construct($name, $service)
    {

        $this->name = $name;
        $this->service = $service;
    }

    public function getCommandName()
    {
        return 'get_room_occupants';
    }

    public function getCommandData()
    {
        return [
            'name' => $this->name,
            'service' => $this->service
        ];
    }
}