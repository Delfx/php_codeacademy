<?php


abstract class Person{

    public function __construct(public string $name) {
       
    }

    abstract public function getValue();

}

class Programmer extends Person{


    public function getValue()
    {
        return "Hello world! I'm " . $this->name; ;
    }

}

class Student extends Person{


    public function getValue()
    {
        return "Hello, I'm " . $this->name; ;
    }

}

class Teacher extends Person{


    public function getValue()
    {
        return "Hello students, I'm " . $this->name; ;
    }

}