from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    query = ("insert into students (fname, lname, city) values (%s, %s, %s)")
    data = ["Udit", "Ghetiya", "Rajkot"]
    cursor.execute(query, data)
    print("New Record Created")
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()