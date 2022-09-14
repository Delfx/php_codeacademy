<?php

namespace Services\Messengers;

interface Messenger
{
    public function send(string $userCredentials, string $userText);
}

