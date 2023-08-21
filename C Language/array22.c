/**
    create 2D array and store data in it.
    find maximum
*/

#include<stdio.h>

#define size 3

void main(){
    int ip[size][size], i, j, max = 0;


    /// scan values from user
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// find maximum
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(max < ip[i][j]){
                max = ip[i][j];
            }
        }
    }

    printf("\n Maximum is %d", max);
}
