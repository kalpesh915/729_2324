#include<stdio.h>
#include<string.h>

/**
    strcmp

    string compare

    return 0 if both strings are same
    return -value if first string is small then second
    return +value if first string is large then second
*/

void main(){
    char ip1[100], ip2[100];
    int ans;
    printf("\n Enter first string \t");
    gets(ip1);
    printf("\n Enter second string \t");
    gets(ip2);

    ans = strcmp(ip1, ip2);

    printf("\n answer is %d", ans);
}
