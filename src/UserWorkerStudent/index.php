<?php

require('./User.php');
require('./Worker.php');
require('./Student.php');
require('./Driver.php');

$workerToken = new Worker('Token', 21);
$workerToken->setSalary(300);
echo('Name: ' . $workerToken->getName() . '; Salary: ' . $workerToken->getSalary() . ' Eur ' . '<br>');




$studentKyle = new Student('Kyle', 21);
$studentKyle->setScholarship(200);
$studentKyle->setCourse(2);
echo('Name: ' . $studentKyle->getName() . '; Scholarship: ' . $studentKyle->getScholarship() . ' Eur; ' . 'Course: ' . $studentKyle->getCourse() . '<br>');


$driverMike = new Driver('Mike', 32);
$driverMike->setSalary(300.2);
$driverMike->setDrivingLicense(['A', 'B']);
$driverLicense = $driverMike->getDrivingLicense();
echo('Name: ' . $driverMike->getName() . '; Salary: ' . $driverMike->getSalary() . ' Eur; ' . 'Driver license: ' . implode(", ",$driverLicense));






