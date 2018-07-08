<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/1/2018
 * Time: 11:07 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class SendMessage implements IEjabberdCommand
{
    private $type;
    private $from;
    private $to;
    private $subject;
    private $body;

    public function __construct($type, $from, $to, $subject, $body)
    {
        $this->type = $type;
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function getCommandName()
    {
        return 'send_message';
    }

    //Message type: normal, chat, headline
    public function getCommandData()
    {
        return [
            'type' => $this->type,
            'from' => $this->from,
            'to' => $this->to,
            'subject' => $this->subject,
            'body' => $this->body
        ];
    }
}