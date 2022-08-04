<?php

$getHour = 20;

function getSeconds($getHour)
{
    $countSeconds = $getHour * 60 * 60;
    return "$getHour hour have $countSeconds seconds";
};

echo getSeconds($getHour);
