<?php

namespace Services\Messengers;

use Connectors\EmailConnector;

class EmailMessengerService implements Messenger

{
    public function __construct(private EmailConnector $emailConnector ) {

       

    }

    public function send(string $userCredentials, string $userText)
    {
        return 'something userCredentials: ' . $userCredentials . ' and ' . $userText;
    }
}
