#include<stdio.h>

/// local variable

void main(){
    int x = 10;
    printf("\n value of x is %d", x);

    {
        int x = 15;
        printf("\n value of x is %d", x);
    }

    {
        int x = 20;
        printf("\n value of x is %d", x);
    }

    printf("\n value of x is %d", x);
}
