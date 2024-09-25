#include<iostream>
using namespace std;

/**
    find maximum out of 3 numbers with use of nested if
*/

int main(){
    int ip1, ip2, ip3, ans;
    cout<<"Enter value for ip1, ip2 and ip3 \t";
    cin>>ip1>>ip2>>ip3;

    if(ip1 > ip2){
        if(ip1 > ip3){
            ans = ip1;
        }else{
            ans = ip3;
        }
    }else{
        if(ip2 > ip3){
            ans = ip2;
        }else{
            ans = ip3;
        }
    }

    cout<<"\n Maximum is "<<ans;

    return 0;
}
