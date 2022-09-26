<?php 


use App\Classes;

$htmlBody = new Classes\HtmlBodyClass();
$tag = new Classes\HtmlElementGeneratorClass();

$quizJson = file_get_contents(ROOT . 'json/quiz.json');
$quizJsonDecode = json_decode($quizJson, true);

echo $htmlBody->htmlHeader();
echo $tag->setAttr('method', 'POST')->formOpen();

echo $tag->setTag('h3')->setText($quizJsonDecode[0]['question'])->show();
foreach ($quizJsonDecode[0]['choices'] as $key => $value) {
    echo $tag->radiosGeneration(htmlspecialchars($value), $key + 1);
}



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo $tag->setTag('h3')->setText($quizJsonDecode[1]['question'])->show();
//     foreach ($quizJsonDecode[1]['choices'] as $key => $value) {
//         echo $tag->radiosGeneration(htmlspecialchars($value), $key + 1);
//     }
// } else {
//     echo $tag->setTag('h3')->setText($quizJsonDecode[0]['question'])->show();
//     foreach ($quizJsonDecode[0]['choices'] as $key => $value) {
//         echo $tag->radiosGeneration(htmlspecialchars($value), $key + 1);
//     }
// }


echo $tag->setTag('Button')->setAttr('type', 'submit')->setAttr('class', 'mt-3 btn btn-primary submitButton')->setText('Button')->get();
echo $tag->formClose();
echo $htmlBody->htmlFooter();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($quizJsonDecode);
exit;
