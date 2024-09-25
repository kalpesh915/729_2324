#include<iostream>
using namespace std;

/**
    Factorial Number
    5 = 120
    5 * 4 * 3 * 2 * 1 = 120
*/

int factorial(int);

int main(){
    int ip1, ans;

    cout<<"\n Enter value for ip1 \t";
    cin>>ip1;

    ans = factorial(ip1);
    cout<<"\n Answer is "<<ans;
    return 0;
}

int factorial(int ip1){
    int ans = 1, i;

    for(i=ip1; i>=1; i--){
        ans *= i;
    }

    return ans;
}
