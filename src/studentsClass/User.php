<?php

class User
{
    protected $name;
    private $username;
    private $age;

    // public function __construct() {
    //     $this->var = $var;
    // }

    public function getStudentFromUser()
    {
        // return ($this->name, $this->;);
    }



    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}
