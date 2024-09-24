from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    query = ("insert into students (fname, lname, city) values (%s, %s, %s)")

    data = [
        ("Udit", "Ghetiya", "Rajkot"), ("Gaurav", "Pandya", "Rajkot"),
        ("Jayrajsinh", "Parmar", "Rajkot"), ("Yadav", "Yagnik", "Rajkot"),
        ("Yorgrajsinh", "Rana", "Rajkot"), ("Yash", "Vaghela", "Rajkot"),
        ("Adarsh", "Chavda", "Rajkot"), ("Neel", "Patel", "Rajkot"),
        ]
    try:
        cursor.executemany(query, data)
        connection.commit()
        print(cursor.rowcount, "New Record Created ", cursor.lastrowid, "Last Record ID")
    except Exception as err:
        connection.rollback()
        print("Error is ", err)
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()