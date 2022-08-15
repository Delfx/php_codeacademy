<?php

// $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
$decoded = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Receive the RAW post data.

  http_response_code(200);

  echo (json_encode(['message' => 'User saved successfully', 'data' => $_POST]));

  // require_once 'views/text.phtml';

  exit;

  //If json_decode failed, the JSON is invalid.
  if (!is_array($decoded)) {
    // echo json_encode(['message' => 'User saved successfully']);
    exit;
  } else {
    // echo json_encode(['message' => 'User saved successfully']);
    exit;
  }
}




require_once 'views/index.phtml';
