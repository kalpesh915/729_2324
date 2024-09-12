ip1 = int(input("Enter value for ip1 \t"))
ip2 = int(input("Enter value for ip2 \t"))
ip3 = int(input("Enter value for ip3 \t"))

if ip1 > ip2 and ip1 > ip3:
    ans = ip1
elif ip2 > ip1 and ip2 > ip3:
    ans = ip2
else:
    ans = ip3

print("Maimum is ",ans)
