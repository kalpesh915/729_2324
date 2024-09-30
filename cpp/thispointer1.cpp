/**
    this pointer
*/

#include<iostream>
using namespace std;

class Box{
    private:
    int h, w, b;

    /// constructor using parameter default
    public:
    Box(int i =1, int j =1, int k =1){
        h = i;
        w = j;
        b = k;
    }

    int volume(){
        return h * w * b;
    }

    int compare(Box box){
        return this->volume() > box.volume();
    }
};

int main(){
    Box b1(4, 3, 2);
    Box b2(8, 2, 8);

    cout<<"\n Volume of Box 1 is "<<b1.volume();
    cout<<"\n Volume of Box 1 is "<<b2.volume();

    /// when execute code this pointer refere b1 as caller object
    if(b1.compare(b2)){
        cout<<"\n Box 1 is Bigger then Box 2";
    }else{
        cout<<"\n Box 2 is Bigger then Box 1";
    }
}
