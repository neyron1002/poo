function Employee(jobPosition, company, person){
    this.id;
    this.jobPosition = jobPosition;
    this.company = company;
    this.person = person;
    this.startDate;
    this.endDate;
};

//In this case when is a function, this is the class
Employee.prototype.printEmployee = function(){
    console.log(this);
}


//this en arrow function is a global or parent scope
// Employee.prototype.printEmployee = () => {
        //in this case this is windows object, 
        //the global object, the parent object
        //depend to the scope
//     console.log(this);
// }