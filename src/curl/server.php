<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    var_dump($_POST);
    $myfile = fopen("./users/newfile.json", "a");
    fwrite($myfile, $txt);
    fclose($myfile);
    var_dump($_POST);
}

var_dump($_POST);
