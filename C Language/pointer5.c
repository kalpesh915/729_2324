#include<stdio.h>

/**
    & use to get address of any variable
    * use to declare pointer and goto at specified location

    double pointer / pointer of pointer
*/

void main(){
    int x, y, *ptr, **pptr;

    x = 10;
    y = 15;

    ptr = &x;
    pptr = &ptr;

    printf("\n Double pointer of pptr is %d",**pptr);
    ptr = &y;
    printf("\n Double pointer of pptr is %d",**pptr);
}
