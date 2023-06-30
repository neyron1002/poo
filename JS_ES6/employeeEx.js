class EmployeeEx extends Person{

    constructor (jobPosition, company, name, surName, nuip){
        super(name, surName, nuip);
        this.id;
        this.jobPosition = jobPosition;
        this.company = company;        
        this.startDate;
        this.endDate;
    }

    printEmployee() {
        console.log(this);
    }
    
    
};