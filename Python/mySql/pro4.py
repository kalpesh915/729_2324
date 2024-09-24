from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="")
    cursor = connection.cursor()
    result = cursor.execute("create database sample729")
    print("New Database Created")
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()