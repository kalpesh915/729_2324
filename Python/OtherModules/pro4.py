import os
try:
    os.rmdir("bhalabhai")
except Exception as err:
    print("Error is ",err)