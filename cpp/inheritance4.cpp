#include<iostream>
using namespace std;
/**
    Hierarchical inheritance
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

int main(){
    Math1 m1;
    Math2 m2;
    Math3 m3;
    m1.sum(111, 22);
    m1.sub(111, 22);
    m2.mul(111, 22);
    m2.div(111, 22);
    m3.mod(111, 22);
    return 0;
}
