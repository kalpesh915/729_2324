/**
    print following pattern with for loop

    A
    B C
    D E F
    G H I J
    K L M N O

    with int data type
    A = 65
*/
#include<stdio.h>

void main(){
    int i, j, k = 65;

    for(i=1; i<=5; i++){
        for(j=1; j<=i; j++){
            printf("%c ", k++);
        }
        printf("\n");
    }
}
