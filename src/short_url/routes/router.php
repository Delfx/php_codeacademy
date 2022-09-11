<?php

$moduleLink = $_GET['models'] ?? 'index.php';


if ($moduleLink == 'logout') {
    include_once('../models/logout.php');
}
