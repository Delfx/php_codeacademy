<?php

namespace App\Services;

class FormBuilder{

    public function __construct(public string $data) {
        $this->data = $data;
    }
    

    public function getData(){
        return $this->data;;
    }

}