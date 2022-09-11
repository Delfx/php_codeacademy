<?php

class ArrayHelper
{

    public function __construct(public ?string $var = null) {
        $this->var = $var;
    }

    // public static function sum(array $arr)
    // {
    //     return array_sum($arr);
    // }

    // public static function avg(array $arr) 
    // {
    //     return self::sum($arr)/count($arr);
    // }
}

// $arr = [2, 4, 6];

// var_dump(ArrayHelper::sum($arr));
// var_dump(ArrayHelper::avg($arr));


$arr = new ArrayHelper();

$arr->$var;