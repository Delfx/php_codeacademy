<?php

namespace Services\Messengers;

use Connectors\FacebookConnector;


class FacebookMessengerService implements Messenger{

    public function __construct(private FacebookConnector $facebookConnector) {
        $facebookConnector->__construct('labas', 'labas');
    }

    public function send(string $userCredentials, string $userText)
    {
        return 'something userCredentials: ' . $userCredentials . ' and ' . $userText;
    }
}


