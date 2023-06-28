<?php

class Person{
    public $id;
    public $name;
    public $surName;
    public $nuip;    

    public function __construct($name, $surName, $nuip){
        $this->name = $name;
        $this->surName = $surName;
        $this->nuip = $nuip;
    }
}