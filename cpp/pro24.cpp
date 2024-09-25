#include<iostream>
using namespace std;

/**
    UDF
*/

int sum(int, int);

int main(){
    int ip1, ip2, ans;

    cout<<"\n Enter value for ip1 \t";
    cin>>ip1;
    cout<<"\n Enter value for ip2 \t";
    cin>>ip2;

    ans = sum(ip1, ip2);
    cout<<"\n Answer is "<<ans;
    return 0;
}

int sum(int ip1, int ip2){
    return ip1 + ip2;
}
