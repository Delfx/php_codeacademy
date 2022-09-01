<?php

class Person
{
    public $name;
    public $surname;
    public $age;


    public function __construct(?string $name = null, ?string $surname = null, ?int $age = null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getPerson(){

        return 'vardas '. 'thi' . 'pavardė ' . $this->surname;

    }
}
