#include<iostream>
using namespace std;
/**
    Multi Level Inheritance
*/

/// parent / base / super
class Math1{
    public:
    void sum(int i, int j){
        cout<<"Sum is "<<i+j<<endl;
    }
    void sub(int i, int j){
        cout<<"Sub is "<<i-j<<endl;
    }
};

/// child / derived / sub
class Math2 : public Math1{
    public:
    void mul(int i, int j){
        cout<<"Mul is "<<i*j<<endl;
    }
    void div(int i, int j){
        cout<<"div is "<<i/j<<endl;
    }
};

class Math3 : public Math2{
    public:
    void mod(int i, int j){
        cout<<"Mod is "<<i%j<<endl;
    }
};

int main(){
    Math3 m3;
    m3.sum(111, 22);
    m3.sub(111, 22);
    m3.mul(111, 22);
    m3.div(111, 22);
    m3.mod(111, 22);
    return 0;
}
