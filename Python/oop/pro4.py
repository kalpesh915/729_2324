# class
class Student:
    roll = 1
    fname = "Tushar"
    lname = "Kadam"

    def printer(self):
        print("Welcome",self.fname,self.lname,"Your Roll No is",self.roll)

# Object
obj1 = Student()
obj2 = Student()

obj1.printer()
obj2.printer()
