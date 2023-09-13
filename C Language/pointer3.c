#include<stdio.h>

/**
    & use to get address of any variable
    * use to declare pointer and goto at specified location
*/

void main(){
    int x = 10, *ptr;

    printf("\n Value of x is %d and address of x is %d", x, &x);
    /// store address of variable x in ptr pointer
    ptr = &x;
    printf("\n Value of ptr is %d and address of ptr is %d", ptr, &ptr);

    printf("\n *ptr is %d", *ptr);

    *ptr = 100;
    printf("\n Value of x is %d and address of x is %d", x, &x);
}
