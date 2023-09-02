/**
    without static keyword
*/

#include<stdio.h>

void msg();

void main(){
    int i;

    for(i=1; i<=10; i++){
        msg();
    }
}

void msg(){
    int x = 1;
    printf("\n x is %d", x);
    x++;
}
