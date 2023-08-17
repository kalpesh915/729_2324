#include<stdio.h>

/**
    get values from user and store in array
    also find max of all values
*/

#define size 10

void main(){

    int ip[size], i, max = 0;

    /// get values from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// make sum of array
    for(i=0; i<size; i++){
        if(max < ip[i]){
            max = ip[i];
        }
    }

    printf("\n Max of Array is %d", max);
}
