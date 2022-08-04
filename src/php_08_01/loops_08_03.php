<?php

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br/>";
}


$i = 0;

while ($i < 10) {
    $k = 1;

    while ($k <= $i) {
        echo $i;
        ++$k;
    }

    echo "<br/>";
    $i++;
}

