#include<iostream>
using namespace std;
/**
    Single Level Inheritance
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



int main(){
    Math2 m2;
    m2.sum(111, 22);
    m2.sub(111, 22);
    m2.mul(111, 22);
    m2.div(111, 22);
    return 0;
}
