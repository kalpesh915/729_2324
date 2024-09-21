import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()

for x in range(1, 9):
    turtle.forward(100)
    turtle.left(45)
    turtle.dot(15, "red")

turtle.done()