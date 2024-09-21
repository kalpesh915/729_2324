import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()

for x in range(1, 9):
    turtle.forward(100)
    turtle.left(45)
    print(turtle.heading())
    print(turtle.position())

turtle.done()