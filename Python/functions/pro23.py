codeString = 'x=10\ny=20\nz=x+y\nprint(z)'
myCode = compile(codeString, 'sum.py', 'exec')
print(myCode)
exec (myCode)

exec ('print(11 + 22)')