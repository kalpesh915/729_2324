import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()
#turtle.shape("turtle")
#turtle.shape("circle")
turtle.shape("arrow")
for x in range(1, 9):
    turtle.forward(100)
    turtle.left(45)
    turtle.stamp()

turtle.done()