# check entered number is prime or not divisble by 1 or itself

ip = int(input("Enter any number \t"))

for x in range(2, ip):
    if ip % x == 0:
        print("Not Prime Number")
        break
else:
    print("Number is Prime")


