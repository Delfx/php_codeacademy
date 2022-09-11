<?php

require ('./User.php');
require ('./Student.php');


$student = new Student();
$student->setStudentData('psi', 300);

echo $student->getStudentFromUser();

