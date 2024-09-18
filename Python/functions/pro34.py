def calculate(x):
    return  x + x


data = [11, 22, 33, 44, 55]

result = map(calculate, data)
print(list(result))