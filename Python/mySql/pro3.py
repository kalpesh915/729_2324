import mysql.connector

try:
    connection = mysql.connector.connect(host="localhost", user="root",
                                         passwd="")
    cursor = connection.cursor()
    result = cursor.execute("show databases")

    for tmp in cursor:
        print(tmp, end=" ")
except Exception as err:
    print("Error is ",err)
finally:
    connection.close()