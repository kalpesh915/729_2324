class student:
    roll = 10
    fname = "Neel"
    lname = "Kanpariya"


std1 = student()
print(getattr(std1, "fname"))
print(hasattr(std1, "fname"))
delattr(std1, "fname")
print(hasattr(std1, "fname"))
print(hasattr(std1, "city"))
print(std1.fname)