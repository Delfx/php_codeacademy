<?php

require "index.phtml";

$params_needed = [
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'additional_information' => 'Additional information'
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
} else {
    echo '<br> Success';
}
