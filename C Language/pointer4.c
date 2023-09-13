#include<stdio.h>

/**
    & use to get address of any variable
    * use to declare pointer and goto at specified location

    pointer with Array
    pointer store the first address of array than you can move to
    next element or previous elements
*/

void main(){
    int ip[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr;

    ptr = &ip;

    printf("\n address on ptr is %d and value is %d", ptr, *ptr);
    ptr++;
    printf("\n address on ptr is %d and value is %d", ptr, *ptr);
    ptr++;
    printf("\n address on ptr is %d and value is %d", ptr, *ptr);
    ptr++;
    printf("\n address on ptr is %d and value is %d", ptr, *ptr);
}
