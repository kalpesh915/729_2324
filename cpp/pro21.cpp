#include<iostream>
using namespace std;

/**
    while loop
*/

int main(){
    int ip1, ans = 0;

    cout<<"enter any value for ip1 \t";
    cin>>ip1;

    while(ip1 > 0){
        ans *= 10;
        ans += ip1 % 10;
        ip1 = ip1 / 10;
    }

    cout<<"\n Answer is "<<ans;

    return 0;
}
