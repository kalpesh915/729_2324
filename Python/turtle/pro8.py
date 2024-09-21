import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()
turtle.color("orange")
for x in range(1, 9):
    if x %2 == 0:
        turtle.up()
    else:
        turtle.down()
    turtle.circle(10*x)
turtle.done()