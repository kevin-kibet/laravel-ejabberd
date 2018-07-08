<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/1/2018
 * Time: 11:07 PM
 */


namespace Ejabberd\Commands;

use Ejabberd\Commands\Contracts\IEjabberdCommand;

class CreateUser implements IEjabberdCommand
{

    private $user;
    private $password;
    /**
     * @var int
     */
    private $host;

    public function __construct($user, $password, $host = -1)
    {

        $this->user = $user;
        $this->password = $password;
        $this->host = $host;
    }

    public function getCommandName()
    {
        return 'register';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->host,
            'password' => $this->password
        ];
    }
}