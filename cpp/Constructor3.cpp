#include<iostream>
using namespace std;
/**
    Parametrized Constructor
*/

class Demo{
    int ip;
    public:
    Demo(int tmp){
        cout<<"Constructor Called"<<endl;
        ip = tmp;
    }

    void print(){
        cout<<"Value of ip is "<<ip<<endl;
    }
};

int main(){
    Demo d1(11), d2(22);
    d1.print();
    d2.print();
    return 0;
}
