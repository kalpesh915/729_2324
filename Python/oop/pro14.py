class ParentClass:
    pass

class ChildClass(ParentClass):
    pass

obj = ChildClass()

print(isinstance(obj, ChildClass))
print(isinstance(obj, ParentClass))
