<?php

class Vehicle
{

    public $brand;
    public $model;
    public $year;


    public function __construct(string $brand, string $model,  int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function setWheelsNUmber(int $wheels)
    {
        $this->wheels = $wheels;
    }

    public function getIntroduction()
    {
        return $this->make . ' ' . $this->model;
    }

    public function getAge()
    {
        return  (date('Y')) - $this->year;
    }

    public function getAgeText()
    {
        if ($this->getAge() <= 10) {
            return '10 year or newer';
        }
        return '11 years or older';
    }

    public function getWheelsNumber()
    {
        return $this->wheels;
    }

    public function getWheelsNumberText()
    {
        return $this->brand . ' has ' . $this->getWheelsNumber() . ' wheels';
    }

    public function getFuelType() {
		throw new Exception('Fuel type not found');
	}
}




// echo $plane->getAge();
