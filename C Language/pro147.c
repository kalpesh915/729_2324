/**
    continue statement
    terminate the loop for current iteration
*/

#include<stdio.h>

void main(){
    int i = 0;

    while(i <= 100){
        i++;
        if( i %2 == 1){ /// odd
            continue;
        }
        printf(" %d", i);
    }
}
