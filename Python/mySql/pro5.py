from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    query = ("create table students (id int auto_increment primary key,"
             "fname varchar(20), lname varchar(20))")
    result = cursor.execute(query)
    print("New Table Created")
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()