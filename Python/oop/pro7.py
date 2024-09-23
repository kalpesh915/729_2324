class Student:
    count = 0
    def __init__(self):
        Student.count = Student.count + 1


print(Student.count)
std1 = Student()
std2 = Student()
std3 = Student()
std4 = Student()
std5 = Student()
print(Student.count)