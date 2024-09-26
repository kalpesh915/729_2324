#include<iostream>
using namespace std;
/**
    Default Constructor
*/

class Demo{
    int ip;
    public:
    Demo(){
        cout<<"Constructor Called"<<endl;
        ip = 100;
    }

    void print(){
        cout<<"Value of ip is "<<ip;
    }
};

int main(){
    Demo d1, d2;
    d1.print();
    d2.print();
    return 0;
}
