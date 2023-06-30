var company = new Company("Grupo Neyron S.A.S", 900929849);
var employee = new Employee("CEO", company, 
    new Person("Juan Manuel", "Pedraza", 1015429568));

var employee2 = new Employee("COO", company, 
    new Person("Diana", "Duque", 52928864));

employee.printEmployee();
employee2.printEmployee();

var sofia = new EmployeeEx("Heredera", company, "Sofia", "Pedraza", 1111);
sofia.printEmployee();