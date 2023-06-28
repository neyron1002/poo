class Person:
    id          = int
    name        = str
    surname     = str
    nuip        = int

    def __init__(self, name, surname, nuip):
        self.name       = name
        self.surname    = surname
        self.nuip       = nuip