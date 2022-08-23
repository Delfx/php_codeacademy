<?php
error_reporting(E_ALL ^ E_DEPRECATED);

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function generateRandomString($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $getFromClickData =  json_decode(file_get_contents('php://input'));
    $getPost =  json_decode(file_get_contents('https://randomuser.me/api/?results=' . $getFromClickData), true);

    $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($getPost['results'][0]));
    $keyArray = [];
    foreach ($it as $key => $value) {
        $keyArray[] = $key;
    }

    $randomName = generateRandomString();
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->fromArray([$keyArray], NULL, 'A1');

    for ($i = 0; $i < count($getPost['results']); $i++) {
        $sheetCell = $i + 2;
        $result = [];
        array_walk_recursive($getPost['results'][$i], function ($value, $key) use (&$result) {
                $result[] = $value;
        });
        $sheet->fromArray([$result], NULL, 'A' . $sheetCell);
    }

    $writer = new Xlsx($spreadsheet);
    $writer->save('xlsx/' .  $randomName . '.xlsx');

    echo json_encode(['fileName' =>  'xlsx/' . $randomName . '.xlsx']);
    exit;
}


require('view/index.phtml');
