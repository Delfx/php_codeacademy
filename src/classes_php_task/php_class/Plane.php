<?php

class Plane extends Vehicle
{

    public function __construct($brand, $model, $year, $wheels) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->setWheelsNUmber($wheels);
    }



    public function getFuelType() {
		return [5];
	}


}
