/**
    inline function
*/

#include<iostream>
using namespace std;

inline int sum(int, int);

inline int sum(int x, int y){
    return x + y;
}

int main(){
    cout<<"\n Sum is "<<sum(11, 22);
    cout<<"\n Sum is "<<sum(11, 32);
    cout<<"\n Sum is "<<sum(11, 62);
    return 0;
}
