from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    result = cursor.execute("select * from students")
    data = cursor.fetchone()
    print(data)
    data = cursor.fetchone()
    print(data)
    data = cursor.fetchone()
    print(data)
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()