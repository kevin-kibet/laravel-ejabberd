<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 12:08 PM
 */


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class ChangePassword implements IEjabberdCommand
{
    private $user;
    private $password;
    private $host;

    public function __construct($user, $password, $host)
    {
        $this->user = $user;
        $this->password = $password;
        $this->host = $host;
    }

    function getCommandName()
    {
        return 'change_password';
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