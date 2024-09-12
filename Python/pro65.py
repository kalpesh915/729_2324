ip = int(input("Enter any Number \t"))
ans = 0
# find how many digits in entered number

"""
    12345 / 10
    1234  / 10
    123   / 10
    12    / 10
    1     / 10
    0
    
"""


while ip > 0:
    ans += 1
    ip = int(ip / 10)

print(ans)
    
