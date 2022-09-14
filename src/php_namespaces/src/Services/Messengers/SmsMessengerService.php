<?php

namespace Services\Messengers;

class SmsMessengerService implements Messenger{


    public function send(string $userCredentials, string $userText)
    {
        return 'something userCredentials: ' . $userCredentials . ' and ' . $userText;

    }
}