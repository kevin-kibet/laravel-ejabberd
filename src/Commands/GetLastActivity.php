<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:08 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetLastActivity implements IEjabberdCommand
{
    private $user;

    private $host;

    public function __construct($user, $host)
    {

        $this->user = $user;
        $this->host = $host;
    }

    public function getCommandName()
    {
        return 'get_last';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->host
        ];
    }
}