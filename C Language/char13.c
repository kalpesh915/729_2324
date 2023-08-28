#include<stdio.h>
#include<ctype.h>

/**
    find length of entered string
*/

void main(){
    char ip[100];
    int i = 0;

    printf("\n Enter any string \t");
    gets(ip);

    while(ip[i] != '\0'){
        i++;
    }

    printf("\n Length of String is %d", i);
}
