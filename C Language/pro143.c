/**
    do{

    }while(condition);

    do while loop is exit control loop
    must execute once before check the condition
*/

#include<stdio.h>

void main(){
    int i = 100;

    do{
        printf(" %d", i);
        i++;
    }while(i <= 10);
}
