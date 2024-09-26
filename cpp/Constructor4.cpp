#include<iostream>
using namespace std;
/**
    Parametrized Constructor
*/

class Demo{
    int ip;
    public:
    Demo(int tmp){
        ip = tmp;
        print();
    }

    void print(){
        cout<<"Value of ip is "<<ip<<endl;
    }
};

int main(){
    Demo d1(11), d2(22), d3(33);
    return 0;
}
