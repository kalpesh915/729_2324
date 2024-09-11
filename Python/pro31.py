# Bitwise Operators

ip1 = 10
ip2 = 12

"""
    ip1   10    1010
    ip2   12    1100
           &    1000
"""

ans = ip1 & ip2

print(ans)


"""
    ip1   10    1010
    ip2   12    1100
           |    1110
"""

ans = ip1 | ip2

print(ans)


"""
    ip1   10    1010
    ip2   12    1100
           ^    0110
"""

ans = ip1 ^ ip2

print(ans)


