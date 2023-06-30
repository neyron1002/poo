from company import Company
from employee import Employee
from employeeEx import EmployeeEx
from person import Person


if __name__ == "__main__":
    print("Hello Py")
    company = Company("Grupo Neyron S.A.S", 900929849)
    # company.bussinessName = "Grupo Neyron"
    # company.nit = "900929849"

    print(vars(company));

    company2 = Company("Nubenet S.A.S", 9999999)
    # company2.bussinessName = "Nubenet S.A.S"
    # company2.nit = "99999999"

    print(vars(company2))


    employee = Employee("CEO", company, Person("Juan Manuel", "Pedraza", 1015429568))

    person = Person("Diana Carolina", "Duque", 52928864)
    employee2 = Employee("COO", company, person)

    employee.printEmployee()
    employee2.printEmployee()

    sofia = EmployeeEx("Heredera", company, "Sofia", "Pedraza", 111)
    sofia.printEmployee()

