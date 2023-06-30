from company import Company
from person import Person

class EmployeeEx(Person):
    id              = int
    jobPosition     = str
    company         = Company("", 0)    
    startDate       = str
    endDate         = str

    def __init__(self, jobPosition, company, name, surName, nuip):
        super().__init__(name, surName, nuip)
        self.jobPosition = jobPosition
        self.company = company
        


    def printEmployee(self):
        print(self.jobPosition)
        print(vars(self.company))
        print(self.name)