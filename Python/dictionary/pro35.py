data = bytearray("welcome to function of python", "UTF-8")

mv = memoryview(data)

print(mv)
print(mv[0])
print(chr(mv[0]))
print(list(bytes(mv[0:5])))