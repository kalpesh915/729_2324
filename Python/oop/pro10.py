# singlelevel inheritance
class Math1:
    def sum(self, ip1, ip2):
        print("Sum is ", (ip1 + ip2))
    def sub(self, ip1, ip2):
        print("Sub is ", (ip1 - ip2))

class Math2(Math1):
    def div(self, ip1, ip2):
        print("Div is ", (ip1 / ip2))
    def mod(self, ip1, ip2):
        print("Mod is ", (ip1 % ip2))

math2 = Math2()
math2.sum(ip1=111, ip2=22)
math2.sub(111, 22)
math2.div(111, 22)
math2.mod(111, 22)