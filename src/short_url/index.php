<?php

define('SITE_ROOT', __DIR__);
date_default_timezone_set('Europe/Vilnius');

// if ($_) {
//     # code...
// }


function generateRandomString($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]short.php?code=" . $randomString;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dt = new DateTime();
    $date = $dt->format('Y-m-d H:i:s');

    try {
        require(dirname(__FILE__) . '/phpClass/fileGetUrl.php');

        $encode = file_get_contents('php://input');

        if (filter_var($encode, FILTER_VALIDATE_URL)) {

            $url = [
                'url' => $encode,
                'shortCode' => generateRandomString(),
                'time' => $date
            ];

            $addLink = new Url();
            echo $addLink->setURL($url);

            exit;
        } else {
            echo json_encode([
                'message' => 'No it is not url',
                'response' => 'danger'
            ]);
            exit;
        }
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}

include('./view/index.phtml');
