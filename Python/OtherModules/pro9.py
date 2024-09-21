import os
print(os.access("sample.txt", os.F_OK))
print(os.access("sample.txt", os.R_OK))
print(os.access("sample.txt", os.W_OK))
print(os.access("sample.txt", os.X_OK))