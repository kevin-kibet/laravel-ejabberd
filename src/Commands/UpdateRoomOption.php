<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:06 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class UpdateRoomOption implements IEjabberdCommand
{
    private $name;
    private $service;
    private $option;
    private $value;

    public function __construct($name, $service, $option, $value)
    {
        $this->name = $name;
        $this->service = $service;
        $this->option = $option;
        $this->value = $value;
    }

    public function getCommandName()
    {
        return 'change_room_option';
    }

    public function getCommandData()
    {
        return [
            'name' => $this->name,
            'service' => $this->service,
            'option' => $this->option,
            'value' => $this->value
        ];
    }
}