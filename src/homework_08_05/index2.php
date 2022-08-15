<?php


define('SITE_ROOT', realpath(dirname(__FILE__)));

$printMessage = '';
$errors = [];
$formIsFull = true;
$photoIsUploaded = false;
$name = '';
$lastname = '';
$image = '';

$paramsNeeded = [
    'first_name' => 'Vardas',
    'last_name' => 'Pavarde',
    'additional_information' => 'Papildomas Informacija',
];


// https://stackoverflow.com/a/35665021

$array = $_POST;

// var_dump($_POST);

if ((count($array) != count(array_filter($array)))) {
    foreach ($paramsNeeded as $key => $value) {
        if (empty($_POST[$key])) {
            $printMessage = "<br> Prašau užpildikite lauką {$value} <br>";
            echo (json_encode(['message' => $printMessage, 'data' => $array]));
        }
    }
    $formIsFull = false;
} else if ($photoIsUploaded == false && isset($_POST['lang']) == false) {


 echo json_encode(['message' => $printMessage, 'data' => $array]);
    // $printMessage = '<br> Užpildykite visus laukus';
}else{
    $printMessage = '<br> <div class="container"> <h2 style = "color: green"> Forma sėkmingai išsiųsta </h2> </div>';
    $formIsFull = true;
}



if (isset($_FILES['image'])) {

    $errors = [];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $exploded = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($exploded));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Neikeltas failas arba neatitinga numatytų plėtinių JPEG arba PNG";
    }

    if ($file_size > 2097152) {
        $errors[] = 'Failas per didelis';
    }

    if (empty($errors) == true && $formIsFull && isset($_POST['lang'])) {
        move_uploaded_file($file_tmp, SITE_ROOT . '/image/' . $file_name);
        $photoIsUploaded = true;
        $printMessage = '<br> <div class="container"> <h2 style = "color: green"> Forma sėkmingai išsiųsta </h2> </div>';
        $name = $_POST['first_name'];
        $lastname = $_POST['last_name'];
    } else {
        $errors;
    }
};

if (($_SERVER['REQUEST_METHOD'] === 'POST') && $photoIsUploaded && isset($_POST['lang'])) {
    require 'upload.php';
} else {
    require 'views/index.phtml';
}
