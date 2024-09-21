from datetime import datetime as dt

# print(dt.now())

if dt(dt.now().year, dt.now().month, dt.now().day, 10) < dt.now() < dt(dt.now().year, dt.now().month, dt.now().day, 18):
    print("Office Time")
else:
    print("Enjoy Time")