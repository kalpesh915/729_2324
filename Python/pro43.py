age = int(input("Enter your age \t"))
gender = input("Please Select Gender \t")

if age >= 18:
    if gender == 'm' or gender == 'M':
        print("Select Block 1")
    elif gender == 'f' or gender == 'F':
        print("Select Block 2")
    else:
        print("Select Block 3")
    print("Welcome for voting")
elif age > 13:
    print("try in next eletion")
else:
    print("Too much young for Voting")
