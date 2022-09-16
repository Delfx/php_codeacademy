<?php


require_once __DIR__.'/vendor/autoload.php';

$form = new App\Services\FormBuilder('data');

var_dump($form->getData());
 
// echo $form->open('index.php', 'POST');
// // <form action="index.php" method="POST">
// echo $form->label('some-id');
// // <label for="some-id">
// echo $form->input('text', 'Enter value', '');
// echo $form->input('password', 'Enter password', '');
// echo $form->password('Enter password');
// echo $form->textarea('Enter text');
// echo $form->submit('go');
// echo $form->close();
// // </form>