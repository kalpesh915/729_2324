import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()
for x in range(1, 9):
    if x %2 == 0:
        turtle.penup()
    else:
        turtle.pendown()
    turtle.circle(10*x)
turtle.done()