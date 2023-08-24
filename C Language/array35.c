#include<stdio.h>

/**
    in String \0 is known as string terminator
    character
    0123456
    Rajkot\0
*/

#define size 3

void main(){

    char name[10];
    int count = 0;

    printf("\n Enter your name \t");
    gets(name); /// get string

    while(name[count] != '\0'){
        printf(" %c", name[count]);
        count++;
    }
}
