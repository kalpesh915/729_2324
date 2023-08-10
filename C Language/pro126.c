/**
    print following pattern with for loop

    A
    AB
    ABC
    ABCD
    ABCDE

    with char data type
*/
#include<stdio.h>

void main(){
    char i, j;

    for(i='A'; i<='E'; i++){
        for(j='A'; j<=i; j++){
            printf("%c", j);
        }
        printf("\n");
    }
}
