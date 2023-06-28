import java.util.Date;

public class Employee  {
    Integer id;
    String jobPosition;
    Date startDate;
    Date endDate;
    Person person;
    Company company;

    public Employee(String jobPosition, Person person, Company company){
        this.jobPosition = jobPosition;
        this.person = person;
        this.company = company;
    }

    public void printEmployee(){
        System.out.println("Person Name: " + person.name);
        System.out.println("    Company     : " + company.bussinessName);
        System.out.println("    Job Position: " + this.jobPosition);
    }
}
