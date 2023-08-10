/**
    print following pattern with for loop

    A
    BB
    CCC
    DDDD
    EEEEE

    with int data type
    A = 65
*/
#include<stdio.h>

void main(){
    int i, j;

    for(i=65; i<=69; i++){
        for(j=65; j<=i; j++){
            printf("%c", i);
        }
        printf("\n");
    }
}
