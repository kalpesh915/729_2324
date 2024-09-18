data = [11, 22, 33, 44, 55, 66, 77, 88, 99, 111]

def findOdd(x):
    return x %2 != 0

ans = filter(findOdd, data)

print(list(ans))