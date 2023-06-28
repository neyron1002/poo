<?php

class Employee {
    public $id;
    public Company $company;
    public Person $person;
    public $jobPosition;
    public $starDate;
    public $endDate;

    public function __construct($jobPosition, Company $company , Person $person){
        $this->jobPosition = $jobPosition;
        $this->company = $company;
        $this->person = $person;
    }

    public function printEmployee(){
        return "Empleado con nombre {$this->person->name}
        es el {$this->jobPosition} de la empresa {$this->company->bussinessName}";
    }
}