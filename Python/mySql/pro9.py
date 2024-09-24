from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    query = ("insert into students (fname, lname, city) values (%s, %s, %s)")
    fname = input("Enter Your First Name \t")
    lname = input("Enter Your Last Name \t")
    city = input("Enter Your City \t")

    data = [fname, lname, city]
    try:
        cursor.execute(query, data)
        connection.commit()
        print("New Record Created")
    except Exception as err:
        connection.rollback()
        print("Error is ", err)
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()