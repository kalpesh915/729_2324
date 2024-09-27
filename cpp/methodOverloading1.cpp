using namespace std;

#include<iostream>

class Demo{
    public:
    void sum2(int i, int j){
        cout<<"\n Sum is "<< i+j;
    }

    void sum3(int i, int j, int k){
        cout<<"\n Sum is "<< i+j+k;
    }

    void sum4(int i, int j, int k, int l){
        cout<<"\n Sum is "<< i+j+k+l;
    }
};

int main(){
    Demo d;
    d.sum2(111, 222);
    d.sum3(333, 111, 222);
    d.sum4(11, 101, 186,222);
    return 0;
}
