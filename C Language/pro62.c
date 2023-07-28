#include<stdio.h>

/**
    assignment operators /
    compound assignment operators
    short hand operators
*/

void main(){
    int ip;
    printf("\n value of ip is %d", ip);
    ip = 10;
    printf("\n value of ip is %d", ip);
    ip = ip + 10; ///traditional method
    printf("\n value of ip is %d", ip);
    ip += 10; /// short hand operator
    printf("\n value of ip is %d", ip);
    ip -= 10;
    printf("\n value of ip is %d", ip);
    ip *= 10;
    printf("\n value of ip is %d", ip);
    ip /= 10;
    printf("\n value of ip is %d", ip);
    ip %= 10;
    printf("\n value of ip is %d", ip);
}
