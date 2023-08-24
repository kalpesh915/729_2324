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
    gets(name); /// get string
    printf("\n Welcome to %s", name);
}
