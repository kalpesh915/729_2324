using namespace std;

/**
    Method Over ridding
    child class have same function with same number and type of
    parameters as parent class
*/

#include<iostream>

class Animal{
    public:
    void speak(){
        cout<<"\n All Animal are Speaking";
    }
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
    Cat c;
    c.speak();
    Dog d;
    d.speak();
    Cow cw;
    cw.speak();
    return 0;
}

