#include<stdio.h>

/**
    3D Array
*/

#define size 3

void main(){
    int ip[size][size][size], i, j, k;

    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            for(k=0; k<size; k++){
                printf("\n Enter value for ip[%d][%d][%d] \t", i, j, k);
                scanf("%d", &ip[i][j][k]);
            }
        }
    }


    for(i=0; i<size; i++){
        printf("\n Block is %d \n",i);
        for(j=0; j<size; j++){
            for(k=0; k<size; k++){
                printf(" [%d][%d][%d] is %d", i, j, k, ip[i][j][k]);
            }
            printf("\n");
        }
    }
}
