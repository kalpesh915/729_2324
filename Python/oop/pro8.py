class Student:
    def __init__(self, roll, fname, lname):
        self.roll = roll
        self.fname = fname
        self.lname = lname

    def printer(self):
        print("welcome",self.fname,self.lname,"roll no. is",self.roll)

obj1 = Student(1, "Bhalabhai", "Bavaliya")
print(getattr(obj1, "fname"))
setattr(obj1, "fname", "BHALABHAI")
print(getattr(obj1, "fname"))
print(hasattr(obj1, "fname"))
delattr(obj1, "fname")
print(hasattr(obj1, "fname"))
setattr(obj1, "fname", "Bhalabhai")
print(hasattr(obj1, "fname"))