class Student:
    def __init__(self, roll, fname, lname):
        self.roll = roll
        self.fname = fname
        self.lname = lname

    def printer(self):
        print("Welcome",self.fname,self.lname,"roll no is",self.roll)

std1 = Student(1, "Udit", "Ghetiya")
std2 = Student(2, "Bhalabahai", "Bavaliya")
std3 = Student(3, "Tushar", "Kadam")

std1.printer()
std2.printer()
std3.printer()