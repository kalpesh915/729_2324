import os

fp = os.open("data.txt", os.O_RDONLY)
os.close(int(fp))