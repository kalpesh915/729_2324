using namespace std;

/**
    Method Over ridding
    child class have same function with same number and type of
    parameters as parent class
*/

#include<iostream>

class Animal{
    public:
    /// pure virtual function
    virtual void speak() = 0;
};

/// IS-A Relationship
class Cat : public Animal{
    public:
    void speak(){
        cout<<"\n Cat Say Meow Meow";
    }
};

class Dog : public Animal{
    public:
    void speak(){
        cout<<"\n Dog are Barking";
    }
};

class Cow : public Animal{
    public:
    void speak(){
        cout<<"\n Cow Say Heee Hiii";
    }
};

int main(){
    Animal *a; /// reference pointer
    Cat c; /// Cat Object
    Dog d; /// Dog Object
    Cow cw; /// Cow Object

    a = &c;
    a->speak();

    a = &d;
    a->speak();

    a = &cw;
    a->speak();
    return 0;
}

