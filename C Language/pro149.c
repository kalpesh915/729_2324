/**
    create own loop with use of go to statement
*/

#include<stdio.h>

void main(){
    int i;

    i = 1;

    loop: /// label

        printf(" %d", i);
        i++;

        if(i <= 10){
            goto loop;
        }
}
