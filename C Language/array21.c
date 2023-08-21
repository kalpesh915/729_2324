/**
    create 2D array and store data in it.
    print data with loop
*/

#include<stdio.h>

#define size 3

void main(){
    int ip[size][size], i, j, sum = 0;


    /// scan values from user
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// make sum
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            sum += ip[i][j];
        }
    }

    printf("\n Sum is %d", sum);
}
