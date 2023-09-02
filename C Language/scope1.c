/**
    variable with local scope
*/

#include<stdio.h>

void main(){
    int x = 10; /// local for main()
    printf("\n value of x is %d", x);
    msg();
}

void msg(){
    printf("\n value of x is %d", x); /// error
}
