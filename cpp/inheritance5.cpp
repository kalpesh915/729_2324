#include<iostream>
using namespace std;
/**
    Hybrid inheritance
*/

class Design{
    public:
    void pattern(){
        cout<<"*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*"<<endl;
    };
};

class Math1 : public Design{
    public:
    void sum(int i, int j){
        pattern();
        cout<<"Sum is "<<i+j<<endl;
    }
    void sub(int i, int j){
        pattern();
        cout<<"Sub is "<<i-j<<endl;
    }
};

class Math2 : public Design{
    public:
    void mul(int i, int j){
        pattern();
        cout<<"Mul is "<<i*j<<endl;
    }
    void div(int i, int j){
        pattern();
        cout<<"div is "<<i/j<<endl;
    }
};


class Math3 : public Design{
    public:
    void mod(int i, int j){
        pattern();
        cout<<"Mod is "<<i%j<<endl;
    }
};

class Calculator: public Math1, public Math2, public Math3 {

};

int main(){
    Calculator c;
    c.sum(111, 22);
    c.sub(111, 22);
    c.mul(111, 22);
    c.div(111, 22);
    c.mod(111, 22);
    return 0;
}
