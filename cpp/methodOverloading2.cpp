using namespace std;

/**
    Method Overloading
    Class have same method name but different number and type of
    parameters
*/

#include<iostream>

class Demo{
    public:
    void sum(int i, int j){
        cout<<"\n Sum is "<< i+j;
    }

    void sum(int i, int j, int k){
        cout<<"\n Sum is "<< i+j+k;
    }

    void sum(int i, int j, int k, int l){
        cout<<"\n Sum is "<< i+j+k+l;
    }

    void sum(int i, int j, int k, int l, int m){
        cout<<"\n Sum is "<< i+j+k+l+m;
    }
};

int main(){
    Demo d;
    d.sum(111, 222);
    d.sum(333, 111, 222);
    d.sum(11, 101, 186, 222);
    d.sum(11, 101, 186, 222, 456);
    return 0;
}
