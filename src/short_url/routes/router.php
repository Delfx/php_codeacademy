<?php

$moduleLink = $_GET['models'] ?? 'index.php';


if ($moduleLink == 'logout') {
    header('Location: /short_url/models/logout.php');
}
