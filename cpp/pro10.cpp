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
        case 0:{
            cout<<"\n Sunday";
            break;
        }

        case 1:{
            cout<<"\n Monday";
            break;
        }

        case 2:{
            cout<<"\n Tuesday";
            break;
        }

        case 3:{
            cout<<"\n Wednesday";
            break;
        }

        case 4:{
            cout<<"\n Thursday";
            break;
        }

        case 5:{
            cout<<"\n Friday";
            break;
        }

        case 6:{
            cout<<"\n Saturday";
            break;
        }

        default:{
            cout<<"\n No Match Found";
            break;
        }
    }

    return 0;
}
