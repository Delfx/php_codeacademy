<?php



$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?results=1');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, true);

// set post fields
$post = $result;

// var_dump($obj['results']);

try {
    $chPost = curl_init();

    curl_setopt($chPost, CURLOPT_URL, 'nginx/curl/server.php');
    curl_setopt($chPost, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chPost, CURLOPT_POST, true);
    curl_setopt($chPost, CURLOPT_POSTFIELDS, $post);

    curl_exec($chPost);
    // if ($response === false) throw new Exception(curl_error($chPost), curl_errno($chPost));
    curl_close($chPost);

    // var_dump($response);

} catch (Exception $e) {
    $response = 'Curl failed with error ' . $e->getCode() . ' ' . $e->getMessage();
    var_dump($response);
}
