function EmployeeEx(jobPosition, company, name, surName, nuip){

    this.prototype = new Person();
    this.prototype.name = name;
    this.prototype.surName = surName;
    this.prototype.nuip = nuip;
    this.id;
    this.jobPosition = jobPosition;
    this.company = company;    
    this.startDate;
    this.endDate;        
};

//EmployeeEx.prototype = new Person();

//In this case when is a function, this is the class
EmployeeEx.prototype.printEmployee = function(){
    console.log(this);
}




