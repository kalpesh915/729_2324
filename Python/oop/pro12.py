# multiple inheritance
class Math1:
    def sum(self, ip1, ip2):
        print("Sum is ", (ip1 + ip2))
    def sub(self, ip1, ip2):
        print("Sub is ", (ip1 - ip2))

class Math2:
    def div(self, ip1, ip2):
        print("Div is ", (ip1 / ip2))
    def mod(self, ip1, ip2):
        print("Mod is ", (ip1 % ip2))

class Math3(Math1, Math2):
    def mul(self, ip1, ip2):
        print("Mul is ", (ip1 * ip2))

math3 = Math3()
math3.sum(ip1=111, ip2=22)
math3.sub(111, 22)
math3.div(111, 22)
math3.mod(111, 22)
math3.mul(111, 22)