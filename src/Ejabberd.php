<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/3/2018
 * Time: 8:37 AM
 */

namespace Ejabberd;


use Ejabberd\Commands\Contracts\IEjabberdCommand;
use Ejabberd\Commands\CreateUser;
use Ejabberd\Commands\SendMessage;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

/**
 * Class Ejabberd
 * @package Ejabberd
 */
class Ejabberd
{
    private $api = '';
    private $user = '';
    private $password = '';
    private $domain = '';
    private $conference_domain = '';

    private $debug = '';

    public function __construct($config)
    {
        $this->api = $config['api'];// config('ejabberd.api', '');
        $this->user = $config['user'];// config('ejabberd.username', '');
        $this->password = $config['password'];//config('ejabberd.password', '');
        $this->domain = $config['domain'];
        $this->conference_domain = $config['conference_domain'];

        $this->debug = $config['debug'];
    }

    /**
     * @param IEjabberdCommand $command
     * @return null|\Psr\Http\Message\StreamInterface
     */
    public function execute(IEjabberdCommand $command)
    {
        $client = new Client([
            'verify' => false,
            'base_uri' => $this->api
        ]);
        $command_name = $command->getCommandName();
        try {
            $response = $client->request('POST', $command_name, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'auth' => [
                    $this->user, $this->password
                ],
                'json' => $command->getCommandData()
            ]);
            if ($this->debug) {
                Log::info($command->getCommandName() . 'executed successfully.');
            }
            return $response->getBody();
        } catch (GuzzleException $e) {
            if ($this->debug) {
                Log::info("Error occurred while executing the command " . $command->getCommandName() . ".");
            }
            return null;
        } catch (\Exception $e) {
            if ($this->debug) {
                Log::info("Error occurred while executing the command " . $command->getCommandName() . ".");
            }
            return null;
        }
    }

    /**
     * @param IEjabberdCommand $command
     */
    public function executeQueue(IEjabberdCommand $command)
    {

    }

    /**
     * @param CreateUser $createUser
     * @return null|\Psr\Http\Message\StreamInterface
     */
    public function createUser(CreateUser $createUser)
    {
        return $this->execute($createUser);
    }

    /**
     * @param SendMessage $sendMessage
     * @return null|\Psr\Http\Message\StreamInterface
     */
    public function sendMessage(SendMessage $sendMessage)
    {
        return $this->execute($sendMessage);
    }
}