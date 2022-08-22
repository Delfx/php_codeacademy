<?php
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
    $getPost =  json_decode(file_get_contents('https://randomuser.me/api/?results=10'), true);
    $randomName = generateRandomString();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Gender');
    $sheet->setCellValue('B1', 'name.title');
    $sheet->setCellValue('C1', 'name.first');
    $sheet->setCellValue('D1', 'name.last');
    $sheet->setCellValue('E1', 'location.city');
    $sheet->setCellValue('F1', 'email');
    $sheet->setCellValue('G1', 'login.username');

    for ($i = 0; $i < count($getPost['results']); $i++) {
        $cellNumber = 2 + $i;

        $sheet->setCellValue('A' . $cellNumber, $getPost['results'][$i]['gender']);
        $sheet->setCellValue('B' . $cellNumber, $getPost['results'][$i]['name']['title']);
        $sheet->setCellValue('C' . $cellNumber, $getPost['results'][$i]['name']['first']);
        $sheet->setCellValue('D' . $cellNumber, $getPost['results'][$i]['name']['last']);
        $sheet->setCellValue('E' . $cellNumber, $getPost['results'][$i]['location']['city']);
        $sheet->setCellValue('F' . $cellNumber, $getPost['results'][$i]['email']);
        $sheet->setCellValue('G' . $cellNumber, $getPost['results'][$i]['login']['username']);
    }

    $writer = new Xlsx($spreadsheet);
    $writer->save('xlsx/' .  $randomName . '.xlsx');

    echo json_encode(['file' =>  'xlsx/' . $randomName . '.xlsx']);
    exit;
}


require('view/index.phtml');
