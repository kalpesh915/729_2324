def findDiv(x, y):
    print("Division is", (x / y))


try:
    ip1 = int(input("Enter First Value \t"))
    ip2 = int(input("Enter Second Value \t"))
    findDiv(ip1, ip2)
except:
    print("Error")

print("Program is Over")