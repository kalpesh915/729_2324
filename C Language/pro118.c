#include<stdio.h>

/**
    draw following pattern with use of nested
    for loop

    12345
    12345
    12345
    12345
    12345

*/

void main(){
    int i, j;

    for(i=1; i<=5; i++){
        for(j=1; j<=5; j++){
            printf("%d", j);
        }
        printf("\n");
    }
}
