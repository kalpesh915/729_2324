def makeSum(*data):
    ans = 0
    for x in data:
        ans += x
    print(ans)

makeSum(11)
makeSum(11, 22)
makeSum(11, 22, 33)
makeSum(11, 22, 33, 44)
makeSum(11, 22, 33, 44, 55)