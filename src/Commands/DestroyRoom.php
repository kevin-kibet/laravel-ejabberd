<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/1/2018
 * Time: 11:00 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class DestroyRoom implements IEjabberdCommand
{
    private $group_name;
    private $service;

    public function __construct($group_name, $service)
    {
        $this->group_name = $group_name;
        $this->service = $service;
    }

    public function getCommandName()
    {
        return 'destroy_room';
    }

    public function getCommandData()
    {
        return [
            'name' => $this->group_name,
            'service' => $this->service
        ];
    }
}