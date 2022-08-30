<?php


session_start();
$coordinates = '';
date_default_timezone_set('Europe/Vilnius');

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['inputName']) && empty($_POST['inputPassword'])) {
            throw new Exception('please fill fields');
        }

        $userDataFromFile = file_get_contents("./json/users.json");
        $userDataFromFile = json_decode($userDataFromFile, true);

        foreach ($userDataFromFile['users'] as $key => $userData) {
            if ($_POST['inputName'] ==  $userData['username'] && $_POST['inputPassword'] ==  $userData['password']) {
                $_SESSION["time"] = date('Y-m-d H:i:s');
                require_once('./view/location.phtml');
                exit;
            }
        }

        throw new Exception('user or password is not correct');
    }
    require_once('./view/location.phtml');
} catch (Exception $e) {
    echo $e->getMessage();
}
