<?php

session_start();
define('SITE_ROOT', __DIR__);


$user = file_get_contents(dirname(__DIR__) . '/short_url/files/users.json', true);
$arrUser = json_decode($user, true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach ($arrUser['users'] as $key => $value) {

        if (($value['username'] == $_POST['user'])  && ($value['password'] == $_POST['pass'])) {

            $_SESSION['user'] = $value['username'];

            echo json_encode([
                'code' => '200',
                'url' => 'index.php'
            ]);
            exit;
        }
    }

    echo json_encode(['code' => '302']);
    exit;
}

require_once('./view/login.phtml');
