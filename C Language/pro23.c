#include<stdio.h>

/// global variable

int x = 100;

void main(){
    printf("\n value of x is %d", x);

    {
        printf("\n value of x is %d", x);
    }

    {
        printf("\n value of x is %d", x);
    }

    printf("\n value of x is %d", x);
}
