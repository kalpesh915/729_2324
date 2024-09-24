from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    # result = cursor.execute("select * from students")
    # result = cursor.execute("select * from students where id = 15")
    # result = cursor.execute("select * from students where id >= 15")
    result = cursor.execute("select * from students limit 5")
    for x in cursor:
        print(x)
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()