<?php

include 'company.php';
include 'employee.php';
include 'person.php';

// class Company{
//     public $id;
//     public $bussinessName;
//     public $nuip;

//     public function __construct($bussinessName, $nuip){
//         $this->bussinessName = $bussinessName;
//         $this->nuip = $nuip;
//     }

//     public function login(){
//         return "Ahora si el nombre es {$this->bussinessName}";
//     }
// }

$companyN = new Company('Grupo Neyron S.A.S',900929);

$person = new Person('Juan Manuel', 'Pedraza', 1015429568);

$employee = new Employee('CEO', $companyN, $person );

$employee2 = new Employee('COO', $companyN, 
new Person('Diana Carolina', 'Duque', 52928864) );

echo $employee->printEmployee();
echo $employee2->printEmployee();


