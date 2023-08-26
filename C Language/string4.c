#include<stdio.h>
#include<string.h>

/**
    strlen
    find length of string
*/

void main(){
    char ip1[100];
    int ans;
    printf("\n Enter your name \t");
    gets(ip1);

    ans = strlen(ip1);

    printf("\n String Length is %d", ans);
}
