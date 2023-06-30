class Main {

    public static void main(String[] args) {
        System.out.println("Hello Main");

        Company company = new Company();
        company.bussinessName = "Grupo Neyron S.A.S";
        company.nit = 900929849;

        Person person = 
        new Person("Juan Manuel", "Pedraza", 1015429);

        Employee employee = new Employee("CEO", person, company);
        employee.printEmployee();

        Employee employee2 = 
        new Employee("COO", 
        new Person("Diana", "Duque", 5292886), 
        company);

        employee2.printEmployee();

        EmployeeEx sofia = 
        new EmployeeEx("Heredera", company, "Sofia", "Pedraza", 11 );

        sofia.printEmployee();
    }
}