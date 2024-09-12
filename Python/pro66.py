ip = int(input("Enter any Number \t"))
ans = 0
# sum of sdigits in entered number

"""
    12345 = 15

    ip         mode        ans
    12345                  0
    12345 % 10 5           0 + 5 = 5
    1234  % 10 4           5 + 4 = 9
    123   % 10 3           9 + 3 = 12
    12    % 10 2           12 + 2 = 14
    1     % 10 1           14 + 1 = 15
    0   > 0 False
"""


while ip > 0:
    ans += ip % 10
    ip = int(ip / 10)

print(ans)
    
