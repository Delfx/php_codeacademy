<?php

if (isset($_FILES['image'])) {

    $errors = '';
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $exploded = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($exploded));
    $imageName = generateRandomString() . '.' . $file_ext;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors = "Neikeltas failas arba neatitinga numatytų plėtinių JPEG arba PNG";
    }

    if ($file_size > 5097152) {
        $errors = 'Failas per didelis';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, SITE_ROOT . '/upload/image/' . $imageName);
    } else {
        $errors;
    }
};
