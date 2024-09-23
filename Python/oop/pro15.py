class Animal:
    def speak(self):
        print("Animal is Speaking")

class Cat(Animal):
    def speak(self):
        print("Cat Says Meow Meow")

class Dog(Animal):
    def speak(self):
        print("Dog is Barking")

cat = Cat()
dog = Dog()

cat.speak()
dog.speak()