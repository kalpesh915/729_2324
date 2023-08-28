#include<stdio.h>
#include<ctype.h>

/**
    run loop until end of the string

    012345678901
    IANT Rajkot\0

    \0 = null character end of string
*/

void main(){
    char ip[100];
    int i = 0;

    printf("\n Enter any string \t");
    gets(ip);

    while(ip[i] != '\0'){
        printf(" %c", ip[i]);
        i++;
    }
}
