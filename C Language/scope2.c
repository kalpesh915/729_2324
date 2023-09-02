/**
    variable with global scope
*/

#include<stdio.h>
int x = 10; /// global for entire program

void main(){

    printf("\n value of x is %d", x);
    msg();
}

void msg(){
    printf("\n value of x is %d", x);
}
