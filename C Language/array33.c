#include<stdio.h>

/**
    String
    Set of characters encalused in ""
    string is array of characters
*/

#define size 3

void main(){

    char name[10];

    printf("\n Enter your name \t");
    scanf("%s", &name);
    printf("\n Welcome to %s", name);
}
