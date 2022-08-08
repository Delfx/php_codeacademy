<?php

// Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.

$weekDays = [
    'lt' => [
        1 => 'Pirmadienis',
        2 => 'Antradienis',
        3 => 'Trečiadienis',
        4 => 'Ketvirtadienis',
        5 => 'Penktadienis',
        6 => 'Šestadienis',
        7 => 'Sekmadienis'

    ],
    'eng' => [
        1 => 'Mondays',
        2 => 'Tuesdays',
        3 => 'Wednesdays',
        4 => 'Thursdays',
        5 => 'Fridays',
        6 => 'Saturdays',
        7 => 'Sundays'
    ]
];

// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.


$getWeekdayByKey = function (string $lang, int $key, bool $today = true) use ($weekDays): string {
    if (!array_key_exists($lang, $weekDays)) {
        return "The Language '{$lang}' is not exist";
    }
    if ($today) {
        if (array_keys($weekDays)[0] == $lang) {
            return "Šiandien yra {$weekDays[$lang][$key]}";
        } else {
            return "Today is {$weekDays[$lang][$key]}";
        }
    } else {
        if (array_keys($weekDays)[0] == $lang) {
            return "Savaitės diena yra {$weekDays[$lang][$key]}";
        } else {
            return "Weekday is {$weekDays[$lang][$key]}";
        }
    }
};


// Parodikite dabartinės dienos pavadinimą

$date = new DateTime();
$todayWeekDayByNumber = $date->format('N');


echo '<br>';
echo $getWeekdayByKey('eng', 3, false);
echo '<br>';
echo $getWeekdayByKey('lt', 3, false);
echo '<br>';
echo $getWeekdayByKey('lt', $todayWeekDayByNumber);
echo '<br>';
echo $getWeekdayByKey('tv', $todayWeekDayByNumber);



// $weekDays = [
//     'lt' => ['Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis', 'Sekmadienis'],
//     'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
// ];
// $newIndexes = range(1, 7);


// foreach ($weekDays as $lang => $days) {
//     $weekDays[$lang] = array_combine($newIndexes, $days);
// }



