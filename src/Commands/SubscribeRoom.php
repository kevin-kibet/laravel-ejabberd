<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/2/2018
 * Time: 4:00 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class SubscribeRoom implements IEjabberdCommand
{


    private $user;
    private $nick;
    private $room;
    /**
     * @var array
     */
    private $nodes;

    public function __construct($user, $nick, $room, $nodes = [])
    {
        $this->user = $user;
        $this->nick = $nick;
        $this->room = $room;
        $this->nodes = $nodes;
    }

    public function getCommandName()
    {
        return 'subscribe_room';
    }

    public function getCommandData()
    {
        /**
         *     {
         * "user": "tom@localhost/dummy",
         * "nick": "Tom",
         * "room": "room1@conference.localhost",
         * "nodes": "urn:xmpp:mucsub:nodes:messages,urn:xmpp:mucsub:nodes:affiliations"
         * }
         * Nodes:
         * urn:xmpp:mucsub:nodes:presence
         * urn:xmpp:mucsub:nodes:messages
         * urn:xmpp:mucsub:nodes:affiliations
         * urn:xmpp:mucsub:nodes:subscribers
         * urn:xmpp:mucsub:nodes:config
         * urn:xmpp:mucsub:nodes:subject
         * urn:xmpp:mucsub:nodes:system
         */
        if (count($this->nodes) <= 0) {
            $this->nodes = [
                'urn:xmpp:mucsub:nodes:presence',
                'urn:xmpp:mucsub:nodes:messages',
                'urn:xmpp:mucsub:nodes:affiliations',
                'urn:xmpp:mucsub:nodes:subscribers',
                'urn:xmpp:mucsub:nodes:config',
                'urn:xmpp:mucsub:nodes:subject',
                'urn:xmpp:mucsub:nodes:system'
            ];
        }
        return [
            'user' => $this->user,
            'nick' => $this->nick,
            'room' => $this->room,
            'nodes' => implode(',', $this->nodes)
        ];
    }
}