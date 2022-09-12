<?php

require('./Person.php');
require('./Programmer.php');
require('./Student.php');
require('./Teacher.php');

$programmer = new Programmer('Eric');
echo $programmer->getValue() . '<br>';

$student = new Student('Kenny');
echo $student->getValue() . '<br>';

$teacher = new Teacher('Stan');
echo $teacher->getValue() . '<br>';