/**
    Static Member Example
*/

#include<iostream>
using namespace std;

class Box{
    private:
    int h, w, b;

    /// constructor using parameter default
    public:
    static int count;
    Box(int i =1, int j =1, int k =1){
        h = i;
        w = j;
        b = k;
        count++;
    }

    int volume(){
        return h * w * b;
    }

    static void getCount(){
        cout<<"\n Object Count is "<<count;
    }
};

int Box::count = 0;

int main(){
    Box::getCount();
    Box b1(4, 3, 2);
    Box b2(8, 2, 8);
    Box b3(10, 2, 4);
    Box::getCount();

    /// pointer of Box
    Box *boxptr;



    boxptr = &b1;
    cout<<"\n Volume of First Reference is "<<boxptr->volume();
    boxptr = &b2;
    cout<<"\n Volume of Second Reference is "<<boxptr->volume();
    boxptr = &b3;
    cout<<"\n Volume of Third Reference is "<<boxptr->volume();
}
