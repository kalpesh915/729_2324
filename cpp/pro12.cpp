#include<iostream>
using namespace std;

/**
    for loop
*/

int main(){
    int ip1, i;

    cout<<"\n Enter any number for print Table \t";
    cin>>ip1;

    for(i=1; i<=10; i++){
        cout<<ip1<<" * "<<i<<" = "<<ip1*i<<endl;
    }

    return 0;
}
