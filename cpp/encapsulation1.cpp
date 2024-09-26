#include<iostream>
using namespace std;
/**
    Encapsulation
*/

class Demo{
    private:
    int i;


    public:
    Demo(int tmp){
        i = tmp;
    }

    void setValueofI(int tmp){
        i = tmp;
    }

    void getValueofI(){
        cout<<"\n Value of i is "<<i;
    }
};

int main(){
    Demo d(10);
    /// cout<<"Value of i is "<<d.i;
    d.getValueofI();
    d.setValueofI(100);
    d.getValueofI();
    return 0;
}
