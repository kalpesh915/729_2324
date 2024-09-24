from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    query = ("alter table students add column city varchar(20)")
    result = cursor.execute(query)
    print("New Table Modified")
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()