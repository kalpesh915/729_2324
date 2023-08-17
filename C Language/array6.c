#include<stdio.h>

/**
    print values of array with for loop
*/

#define size 10

void main(){

    int ip[size] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 190};
    int i;

    for(i=0; i<size; i++){
        printf("\n value of ip[%d] is %d", i, ip[i]);
    }
}
