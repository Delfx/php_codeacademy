<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $decode = json_decode(file_get_contents('php://input'), true);
    $myfile = fopen('./users/'. $decode['results'][0]['name']['first'] . '.json', "w");
    fwrite($myfile, json_encode($_POST));
    fclose($myfile);

    echo 'OK';
}
