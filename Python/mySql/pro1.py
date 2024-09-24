import mysql.connector

connection = mysql.connector.connect(host="localhost", user="root",
                                     passwd="")
print("Connection Successfully")
connection.close()