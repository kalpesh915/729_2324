#bitwise

ip1 = 10
ans = ~ip1

print(ans)

# left shift
"""
   ip1 = 10    1010 << 3
               1010000
"""
ans = ip1 << 3
print(ans)

# right shift
"""
   ip1 = 10    1010 >> 3
               0001
"""
ans = ip1 >> 3
print(ans)
