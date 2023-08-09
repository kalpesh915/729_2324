#include<stdio.h>

/**
    draw following pattern with use of nested
    for loop

    1
    10
    101
    1010
    10101
*/

void main(){
    int i,j;

    for(i=1; i<=5; i++){

        for(j=1; j<=i; j++){
            printf("%d", j%2);
        }
        printf("\n");
    }
}
