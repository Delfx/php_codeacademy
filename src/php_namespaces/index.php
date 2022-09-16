<?php


require_once __DIR__.'/vendor/autoload.php';

$text = 'Hello World';

$host = 'smtp.gmail.com';
$port = 587;
$username = 'testtest@gmail.com';
$password = 'testtest';

$emailConnector = new Connectors\EmailConnector($host, $port, $username, $password);
$emailMessaenger = new Services\Messengers\EmailMessengerService($emailConnector);
$emailMessaenger->send('hello@nonamez.name', $text);

$smsMessager = new Services\Messengers\SmsMessengerService();
$smsMessager->send('+37061234567', $text);

$facebookAppName = 'test-name';
$facebookAppKey  = '';


$facebookConnector = new Connectors\FacebookConnector($facebookAppName, $facebookAppKey);
$facebookMessenger = new Services\Messengers\FacebookMessengerService($facebookConnector);
$facebookMessenger->send(4, $text);



