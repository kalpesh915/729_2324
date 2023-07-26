#include<stdio.h>

/**
    lvalue error
*/

void main(){
    int x = 0;
    printf("\n value of x is %d", x);
    x = x + 10;
    printf("\n value of x is %d", x);
    x + 10 = x; /// lvalue error
    printf("\n value of x is %d", x);
}
