from sys import prefix

import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="", database="pythondb")
    cursor = connection.cursor()
    cursor.execute("delete from students where id > 20")
    print("Data Deleted",cursor.rowcount, "Rows")
    connection.commit()
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()