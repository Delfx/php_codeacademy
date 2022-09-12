<?php

require('./Person.php');

$programmer = new Programmer('Eric');
echo $programmer->getValue() . '<br>';

$student = new Student('Kenny');
echo $student->getValue() . '<br>';

$teacher = new Teacher('Stan');
echo $teacher->getValue() . '<br>';