<?php

class Teacher extends Person{


    public function getValue()
    {
        return "Hello students, I'm $this->name";
    }

}