import java.util.Date;

public class EmployeeEx extends Person {
    Integer id;
    String jobPosition;
    Date startDate;
    Date endDate;    
    Company company;

    public EmployeeEx(
        String jobPosition, Company company, 
        String name, String surName, Integer nuip){

        super(name, surName, nuip);
        this.jobPosition = jobPosition;        
        this.company = company;
    }

    public void printEmployee(){
        System.out.println("Person Name: " + super.name);
        System.out.println("    Company     : " + company.bussinessName);
        System.out.println("    Job Position: " + this.jobPosition);
    }
}
