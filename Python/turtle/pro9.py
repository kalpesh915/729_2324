import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()
turtle.color("orange")
turtle.fillcolor("yellow")
turtle.begin_fill()
for x in range(1, 9):
    if x %2 == 0:
        turtle.up()
    else:
        turtle.down()
    turtle.circle(10*x)
turtle.end_fill()
turtle.done()