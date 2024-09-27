using namespace std;

/**
    Method Over ridding
    child class have same function with same number and type of
    parameters as parent class
*/

#include<iostream>

class Parent{
    public:
    void gn(){
        cout<<"\n Good Noon";
    }
};

class Child : public Parent{
    public:
    void gn(){
        cout<<"\n Good Night";
    }
};

int main(){
    Child c;
    c.gn();
    return 0;
}

