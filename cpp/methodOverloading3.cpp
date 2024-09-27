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

    void sum(float i, float j){
        cout<<"\n Sum is "<< i+j;
    }

    void sum(char i, char j){
        cout<<"\n Sum is "<<i+j;
    }
};

int main(){
    Demo d;
    d.sum(111, 222);
    d.sum((float)11.1, (float)22.2);
    d.sum('a', 'b');
    return 0;
}

