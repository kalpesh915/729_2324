#include<stdio.h>

/**
    print values of array with for loop
*/

#define size 10

void main(){

    int ip[size], i;

    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    for(i=0; i<size; i++){
        printf("\n value of ip[%d] is %d", i, ip[i]);
    }
}
