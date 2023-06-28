from company import Company
from person import Person

class Employee:
    id              = int
    jobPosition     = str
    company         = Company("", 0)
    person          = Person("","",0)
    startDate       = str
    endDate         = str

    def __init__(self, jobPosition, company, person):
        self.jobPosition = jobPosition
        self.company = company
        self.person = person


    def printEmployee(self):
        print(self.jobPosition)
        print(vars(self.company))
        print(vars(self.person))