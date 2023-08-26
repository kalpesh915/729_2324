#include<stdio.h>
#include<string.h>

/**
    strrev
    reverse of string
*/

void main(){
    char ip1[100];
    int ans;
    printf("\n Enter your name \t");
    gets(ip1);

    strrev(ip1);

    printf("\n new String is %s", ip1);
}
