/**
    variable with global scope
*/

#include<stdio.h>

int x = 100;

void main(){
    printf("\n value of x is %d", x);

    {
        int x = 15;
        printf("\n value of x is %d", x);
    }

    printf("\n value of x is %d", x);
}
