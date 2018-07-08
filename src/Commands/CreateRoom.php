<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/1/2018
 * Time: 11:00 PM
 */


namespace Ejabberd\Commands;

use Ejabberd\Commands\Contracts\IEjabberdCommand;

class CreateRoom implements IEjabberdCommand
{

    private $name;
    private $service;
    private $host;
    /**
     * @var array
     */
    private $options;

    public function __construct($name, $service, $host, $options = [])
    {
        $this->name = $name;
        $this->service = $service;
        $this->host = $host;
        $this->options = $options;
    }

    public function getCommandName()
    {
        return 'create_room';
    }

    public function getCommandData()
    {
        /*        {
                        "name": "room1",
                  "service": "muc.example.com",
                  "host": "localhost",
                  "options": [
                    {
                        "name": "members_only",
                      "value": "true"
                    }
                  ]
                }*/
        /*
         * Options: captcha_protected, password_protected, moderated, allow_change_subj,members_only,allow_voice_requests
         * voice_request_min_interval, allow_visitor_nickchange, allow_visitor_status, members_by_default,persistent,
         * max_users, captcha_whitelist, presence_broadcast, vcard_xupdate, anonymous, logging, title, description, lang, public,
         * public_list, moderated, allow_user_invites, allow_query_users, pubsub, allow_private_messages_from_visitors
         * mam, allow_subscription
         */
        return [
            'name' => $this->name,
            'service' => $this->service,
            'host' => $this->host,
            'options' => $this->options
        ];
    }
}