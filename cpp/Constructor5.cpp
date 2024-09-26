#include<iostream>
using namespace std;
/**
    polymorphsm
    Constructor Overloading
*/

class Box{
    int h, w, b;
    public:
    Box(){
        h = w = b = 0;
        print();
    }

    Box(int i){
        h = w = b = i;
        print();
    }

    Box(int i, int j){
        h = w = i;
        b = j;
        print();
    }

    Box(int i, int j, int k){
        h = i;
        w = j;
        b = k;
        print();
    }

    void print(){
        cout<<"Volume of Box is "<<h*w*b<<endl;
    }
};

int main(){
    Box b1, b2(5), b3(5, 3), b4(2, 3, 4);
    return 0;
}
