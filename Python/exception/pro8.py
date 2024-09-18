def findDiv(x, y):
    print("Division is", (x / y))


try:
    ip1 = int(input("Enter First Value \t"))
    ip2 = int(input("Enter Second Value \t"))
    findDiv(ip1, ip2)
except ArithmeticError:
    print("Error Arithamtic Error occured")
except IOError:
    print("Error IO Error occured")
except ValueError:
    print("Value Error")
else:
    print("Else Part Executed")
finally:
    print("Finally Block Executed")
print("Program is Over")