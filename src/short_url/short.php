<?php


session_start();

$str = file_get_contents(dirname(__DIR__) . '/short_url/files/' .  $_SESSION['user'] . '.json', true);
$arr = json_decode($str, true);

$url_components = parse_url("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
parse_str($url_components['query'], $params);
foreach ($arr as $key => $value) {
    if (in_array('http://localhost/short_url/short.php?code=' . $params['code'], $value)) {
        $url = $arr[$key]['url'];
        header("Location: $url");
        exit;
    }
}
