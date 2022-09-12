<?php


abstract class Person{

    public function __construct(public string $name) {
       
    }

    abstract public function getValue();

}