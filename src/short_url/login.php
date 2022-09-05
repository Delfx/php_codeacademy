<?php

session_start();


$user = file_get_contents(dirname(__DIR__) . '/short_url/files/users.json', true);
$arrUser = json_decode($user, true);



// foreach ($arrUser['users'] as $key => $value) {
//     var_dump($value['username']);
//     var_dump($value['password']);
// }

// var_dump($arrUser['users']);

// $_SESSION['username'] = 'hello'; 

// var_dump($_SESSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Location: http://localhost/short_url/index.php");
    exit;

    foreach ($arrUser['users'] as $key => $value) {

        if (($value['username'] == $_POST['user'])  && ($value['password'] == $_POST['pass'])) {
            // ob_start();
            // echo json_encode('You have cleaned session');
            // echo "<script type='text/javascript'> document.location = 'http://localhost/short_url/index.php'; </script>";
            // echo "<script>window.location.href='index.php';</script>";
            // header("Location: http://localhost/short_url/index.php");
            // exit;
        }
    }

    echo json_encode('not ok');
    exit;
}

require_once('./view/login.phtml');
