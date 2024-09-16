studentData = {
    "roll": 1,
    "fname": "Udit",
    "lname": "Ghetiya",
    "city": "Rajkot",
    "age": 22,
    "salary": 19800,
    "married": False,
    "qualification": ["10th", "12th", "BSC", "MSC"],
}

#del studentData["age"]
studentData["age"] = None
print(studentData)
