#include<iostream>
using namespace std;

/**
    for loop
*/

int main(){
    int i, j;

    for(i=1; i<=10; i++){
        for(j=9; j>=i; j--){
            cout<<" ";
        }
        for(j=1; j<=i; j++){
            cout<<"* ";
        }
        cout<<endl;
    }

    return 0;
}
