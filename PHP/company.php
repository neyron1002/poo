<?php

class Company{
    public $id;
    public $bussinessName;
    public $nuip;

    public function __construct($bussinessName, $nuip){
        $this->bussinessName = $bussinessName;
        $this->nuip = $nuip;
    }
}