#include<stdio.h>

/**
    for(init; condition; incre / decre){
        loop body / statements
    }

    1 10 2 9 3 8 4 7 5 6 . . . .
*/

void main(){
    int i, j;

    for(i=1, j=10; i<=10; i++, j--){
        printf("%d %d ", i, j);
    }
}
