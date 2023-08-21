/**
    create 2D array and store data in it.
    print data with loop
*/

#include<stdio.h>

#define size 3

void main(){
    int ip[size][size] = {{11, 22, 33}, {44, 55, 66}, {77, 88, 99}};
    int i, j;

    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf(" ip[%d][%d] is %d", i, j, ip[i][j]);
        }
        printf("\n");
    }
}
