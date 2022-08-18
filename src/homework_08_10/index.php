<?php

define('SITE_ROOT', realpath(dirname(__FILE__)));

function generateRandomString($length = 6)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }

  return $randomString;
}

$decoded = [];
$pdfLink = false;
$errors = '';

$required_fields = ['first_name', 'last_name', 'additional_information', 'city', 'lang'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Receive the RAW post data.
  $pdfName = generateRandomString();
  $postFieldIsFiled = null;
  $imageName = '';
  $name = $_POST['first_name'];
  $surname = $_POST['last_name'];
  $addinformation = $_POST['additional_information'];
  $city = $_POST['city'];
  $langarray = [];
  $lang = '';

  foreach ($required_fields as $field) {
    if (!empty($_POST[$field])) {
      $postFieldIsFiled = $postFieldIsFiled + 1;
    }
  }

  if (!empty($_POST['lang'])) {
    foreach ($_POST['lang'] as $value) {
      $langarray[] =  $value . ';';
    }
    $lang = implode(" ", $langarray);
  }

  require('upload.php');
  require('pdf_module.php');


  if ($postFieldIsFiled == count($required_fields) && !empty($_FILES['image']['name'])) {
    http_response_code(200);
    echo (json_encode(['message' => 'Parsisiųsk Profilio PDF' ,'href' => $pdfName . '.pdf', 'imgError' => '', 'verification' => true, 'postfield' => $postFieldIsFiled, 'isset' => isset($_FILES['image'])]));
    $pdf->Output(__DIR__ . '/upload/' . $pdfName . '.pdf', 'F');
    exit;
  } else {
    echo (json_encode(['message' => 'Užpildykite visus laukus', 'imgError' => $errors, 'isset' => empty($_FILES['image']['name'])]));
    exit;
  }
}

require_once 'views/index.phtml';
