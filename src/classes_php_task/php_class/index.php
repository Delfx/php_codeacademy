<?php

require('Vehicle.php');
require('Plane.php');


$plane = new Plane('airbus', '444', 1990, 5);

echo $plane->getWheelsNumberText();