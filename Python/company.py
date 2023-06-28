class Company:
    id              = int
    bussinessName   = str
    nit             = int

    def __init__(self, businessName, nit):
        self.bussinessName  = businessName
        self.nit            = nit