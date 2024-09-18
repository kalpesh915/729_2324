def findDiv(x, y):
    if y == 0:
        raise ArithmeticError("Division not Possible")
    else:
        print("Division is", (x / y))

try:
    ip1 = int(input("Enter First Value \t"))
    ip2 = int(input("Enter Second Value \t"))
    findDiv(ip1, ip2)
except Exception as err:
    print("Error is ", err)
else:
    print("Else Part Executed")

print("Program is Over")