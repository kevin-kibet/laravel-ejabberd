<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:08 PM
 */


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class CheckPassword implements IEjabberdCommand
{
    private $user;
    private $host;
    private $password;

    public function __construct($user, $host, $password)
    {
        $this->user = $user;
        $this->host = $host;
        $this->password = $password;
    }

    function getCommandName()
    {
        return 'check_password';
    }

    function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->host,
            'password' => $this->password
        ];
    }
}