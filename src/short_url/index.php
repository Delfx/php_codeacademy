<?php


$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "$_SERVER[REQUEST_URI]";

var_dump(parse_url($actual_link)['query']);


// header("Location: https://www.google.com");
// die();