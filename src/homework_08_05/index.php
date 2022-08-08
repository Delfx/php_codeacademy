<?php

require "index.phtml";

$params_needed = [
    'first_name' => 'Vardas',
    'last_name' => 'Pavarde',
    'additional_information' => 'Papildomas Informacija'
];

// https://stackoverflow.com/a/35665021

$array = $_GET;

if (count($array) != count(array_filter($array))) {
    foreach ($params_needed as $key => $value) {
        if (empty($_GET["{$key}"])) {
            echo "<br> Please fill field {$value} <br>";
        }
    }
} else if (empty($_GET)) {
    echo '<br> Please fill all fields';
} else {
    echo '<br> <h2 style = "color: green"> Your form has been sended we will contact you very soon </h2>';
}
