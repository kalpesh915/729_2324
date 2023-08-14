/**
    for loop as infinite loop
    press ctrl + c for stop infinite loop
*/

#include<stdio.h>

void main(){
    int i;
    i = 1;

    for( ; ; ){
        printf(" %d", i);

        if( i== 10){
            break;
        }
        i++;
    }
}
