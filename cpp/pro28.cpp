#include<iostream>
using namespace std;

/**
    OOP Concepts
    class object
*/


class MyMaths
{
    public:
    int finxMax(int ip1, int ip2){
        if(ip1 > ip2){
            return ip1;
        }else{
            return ip2;
        }
    }
};

int main()
{
    MyMaths m1;
    int ip1, ip2, ans;
    cout<<"\n Enter value for ip1 and ip2 \t";
    cin>>ip1>>ip2;

    ans = m1.finxMax(ip1, ip2);
    cout<<"\n Answer is "<<ans;

    return 0;
}

