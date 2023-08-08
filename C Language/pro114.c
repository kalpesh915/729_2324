#include<stdio.h>

/**
    run for loop as given range by user
*/

void main(){
    int i, start, stop;

    printf("\n Enter start value of loop \t");
    scanf("%d", &start);
    printf("\n Enter stop value of loop \t");
    scanf("%d", &stop);

    for(i=start; i<=stop; i++){
        printf("%d ", i);
    }
}
