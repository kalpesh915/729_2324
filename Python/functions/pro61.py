data = [11, 22, 33, 55, 44, 66, 55, 76, 78, 65, 34, 34, 78, 98, 99, 67]

def greaterThan50(x):
    if x > 50:
        return True
    else:
        return False


ans = filter(greaterThan50, data)

print(list(ans))