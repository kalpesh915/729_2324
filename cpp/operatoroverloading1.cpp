/**
    [] Operator overloading
*/
#include<iostream>

const int SIZE = 10;

using namespace std;

class myArray{
    private:
    int ip[SIZE];

    public:
    myArray(){
        int i;
        for(i=0; i<SIZE; i++){
            ip[i] = (i);
        }
    }

    void printArray(){
        int i;
        for(i=0; i<SIZE; i++){
            cout<<" "<<ip[i];
        }
    }

    int &operator [](int index){
        if(index < SIZE){
            return ip[index];
        }else{
            cout<<"\n Index Out of Range";
            return ip[0];
        }
    }
};

int main(){
    myArray ma;
    ///ma.printArray();
    cout<<"ip[1] "<<ma[1]<<endl;
    cout<<"ip[2] "<<ma[2]<<endl;
    cout<<"ip[3] "<<ma[3]<<endl;
    cout<<"ip[11] "<<ma[11]<<endl;
}
