#include<iostream>
using namespace std;

/**
    switch case
*/

int main(){
    int ip1;
    cout<<"Enter value for ip1 \t";
    cin>>ip1;

    switch(ip1){
        case 11:
        case 12:
        case 1:
        case 2:{
            cout<<"\n Winter";
            break;
        }

        case 3:
        case 4:
        case 5:
        case 6:{
            cout<<"\n Summer";
            break;
        }

        case 7:
        case 8:
        case 9:
        case 10:{
            cout<<"\n Monsoon";
            break;
        }

        default:{
            cout<<"\n No Match Found";
            break;
        }
    }

    return 0;
}
