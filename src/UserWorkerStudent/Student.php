<?php

class Student extends User {

    private $scholarship;
    private $course;

   

    /**
     * Get the value of scholarship
     */ 
    public function getScholarship()
    {
        return $this->scholarship;
    }

    /**
     * Set the value of scholarship
     *
     */ 
    public function setScholarship(float $scholarship)
    {
        $this->scholarship = $scholarship;
    }

    /**
     * Get the value of course
     */ 
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set the value of course
     *
     */ 
    public function setCourse(int $course)
    {
        $this->course = $course;
    }
}
