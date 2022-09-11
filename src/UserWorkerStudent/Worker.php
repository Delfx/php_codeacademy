<?php

class Worker extends User {
    private $salary;


    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     */ 
    public function setSalary(float $salary)
    {
        $this->salary = $salary;

    }
}
