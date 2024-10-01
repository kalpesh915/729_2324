/**
    friend function
*/
#include<iostream>
using namespace std;

class Box{
    private:
    int h, w, b;

    public:
    Box(int i, int j, int k){
        h = i;
        w = j;
        b = k;
    }

    friend void volume(Box);
};

void volume(Box b1){
    cout<<"\n Volume of Box is "<<(b1.h* b1.w * b1.b);
}

int main(){
    Box b1(4, 5, 6);
    volume(b1);
}
