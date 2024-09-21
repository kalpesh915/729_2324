filename = "data.txt"

try:
    fp = open(filename, "r")
    text = fp.read()
    fp.close()
except IOError as err:
    print("Error is ",err)