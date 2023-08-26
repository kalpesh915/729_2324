#include<stdio.h>
#include<string.h>

/**
    strupr, strlwr
*/

void main(){
    char ip1[100];

    printf("\n Enter your name \t");
    gets(ip1);
    printf("\n new String is %s", strupr(ip1));
    printf("\n new String is %s", strlwr(ip1));
}
