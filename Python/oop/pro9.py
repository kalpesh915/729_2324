class Student:
    __doc__ = "Sample Class"
    def __init__(self, roll, fname, lname):
        self.roll = roll
        self.fname = fname
        self.lname = lname

    def printer(self):
        print("welcome",self.fname,self.lname,"roll no. is",self.roll)

obj1 = Student(1, "Bhalabhai", "Bavaliya")
print(obj1.__dict__)
print(obj1.__doc__)
print(Student.__name__)
print(Student.__module__)
print(Student.__bases__)