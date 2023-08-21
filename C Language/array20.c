/**
    create 2D array and store data in it.
    print data with loop
*/

#include<stdio.h>

#define size 3

void main(){
    int ip[size][size], i, j;


    /// scan values from user
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf(" ip[%d][%d] is %d", i, j, ip[i][j]);
        }
        printf("\n");
    }
}
