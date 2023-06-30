<?php

class EmployeeEx extends Person {
    public $id;
    public Company $company;    
    public $jobPosition;
    public $starDate;
    public $endDate;

    public function __construct($jobPosition, Company $company,
        $name, $surName, $nuip){
        parent::__construct($name, $surName, $nuip);
        $this->jobPosition = $jobPosition;
        $this->company = $company;        
    }

    public function printEmployee(){
        return "Empleado con nombre {$this->name}
        es el {$this->jobPosition} de la empresa {$this->company->bussinessName}";
    }
}