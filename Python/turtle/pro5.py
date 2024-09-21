import turtle
from math import trunc

myWindow = turtle.Screen()
pen = turtle.Turtle()
side = 20
length = 50
turn = 360 / side

for x in range(side):
    turtle.forward(length)
    turtle.left(turn)
turtle.done()