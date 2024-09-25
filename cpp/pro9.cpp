#include<iostream>
using namespace std;

/**
    odd even
*/

int main(){
    int ip1;
    cout<<"Enter value for ip1 \t";
    cin>>ip1;

    if(ip1 %2 == 0){
        cout<<"\n Even";
    }else{
        cout<<"\n Odd";
    }

    return 0;
}
