import mysql.connector

try:
    connection =  mysql.connector.connect(host="localhost", user="root",
                                          passwd="", database="pythondb")
    print("Database Connected")
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()