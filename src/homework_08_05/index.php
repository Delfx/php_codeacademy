<?php

require "index.phtml";

$params_needed = [
    'first_name', 'last_name', 'additional_information'
];

$array = $_GET;

if(count($array) != count(array_filter($array))){
    foreach ($params_needed as $value) {
        if (empty($_GET["{$value}"])) {
            echo "Please fill field {$value} <br>";
        }
    }
}else{
    echo '<br> Success';
}
