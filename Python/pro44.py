ip = int(input("Enter Day Number \t"))

match ip:
    case 0:
     print("Sunday")
    case 1:
     print("Monday")
    case 2:
     print("Tuesday")
    case _:
     print("Out of Range")
