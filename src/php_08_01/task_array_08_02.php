<?php

// Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().
$arr = ['a', 'b', 'c'];

var_dump($arr);

echo "<br>";

// Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.
foreach ($arr as $key => $value) {
    echo "{$arr[$key]} = {$value}\n";
}

// Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.

echo "<br>";

$arr = ['a', 'b', 'c', 'd'];

var_dump("$arr[0] + $arr[1], $arr[2] + $arr[3]");

// Sukurkite $arr masyvą su elementais 2, 5, 3, 9. Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo. 
// Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.

echo "<br>";

$arr = [2, 5, 3, 9];

var_dump("Sum:",$arr[0] * $arr[1]  + $arr[2] * $arr[3]);

echo "<br>";

// Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.

$arr = range(1,5);

var_dump($arr);
