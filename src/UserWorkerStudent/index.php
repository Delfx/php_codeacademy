<?php

require('./User.php');
require('./Worker.php');
require('./Student.php');
require('./Driver.php');

$WorkerToken = new Student('Token', 21);



$StudentKyle = new Student('Kyle', 21);


$driverMike = new Driver('Mike', 32);
$driverMike->setSalary(300.2);
$driverMike->setDrivingLicense(['A', 'B']);
var_dump($driverMike->getDrivingLicense());
var_dump($driverMike->getSalary());







// var_dump($driverMike);
