<?php

class User
{

    private $name;
    private $age;


    public function __construct(?string $name = null, ?int $age = null) {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Set the value of name
     *
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Set the value of age
     *
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    
    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}
