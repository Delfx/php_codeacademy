<?php

require "index.phtml";

$paramsNeeded = [
    'first_name' => 'Vardas',
    'last_name' => 'Pavarde',
    'additional_information' => 'Papildomas Informacija',
];
 

// https://stackoverflow.com/a/35665021

$array = $_GET;

if (count($array) != count(array_filter($array))) {
    foreach ($paramsNeeded as $key => $value) {
        if (empty($_GET["{$key}"])) {
            echo "<br> Prašau užpildikite lauką {$value} <br>";
        }
    }
} 
else if (empty($_GET)) {
    echo '<br> Užpildykite visus laukus';
} else {
    echo '<br> <h2 style = "color: green"> Forma sėkmingai išsiųsta </h2>';
}


// var_dump(isset($_GET['lang'])); 
