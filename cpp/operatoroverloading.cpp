/**
    Operator overloading
*/

#include<iostream>
using namespace std;

class Box{
    public:
    int h, w, b;

    void setHeight(int i){
        h = i;
    }

    void setWidth(int j){
        w = j;
    }

    void setBredth(int k){
        b = k;
    }

    int volume(){
        return h * w * b;
    }

    Box operator+(Box &b2){
        Box tmp;
        tmp.h = this->h + b2.h;
        tmp.w = this->h + b2.w;
        tmp.b = this->h + b2.b;
        return tmp;
    }


};

int main(){

   Box b1, b2, b3;

   /// set values in b1
   b1.setHeight(2);
   b1.setWidth(2);
   b1.setBredth(2);

   /// set values in b2
   b2.setHeight(2);
   b2.setWidth(2);
   b2.setBredth(2);

   /// print volume
   cout<<"\n Volume of b1 is "<<b1.volume();
   cout<<"\n Volume of b2 is "<<b2.volume();

   b3 = b1 + b2;
   cout<<"\n Volume of b3 is "<<b3.volume();
}
