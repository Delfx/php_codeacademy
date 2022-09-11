<?php

class Plane extends Vehicle
{

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->setWheelsNUmber(4);
    }



    public function getFuelType() {
		return [1,2];
	}


}
