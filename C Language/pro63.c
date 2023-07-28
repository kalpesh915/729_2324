#include<stdio.h>

/**
    find maximum out of 2 numbers with use of
    ternary operator

    syntax :
    ans = (condition ? true value : false value);
*/

void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = (ip1 > ip2 ? ip1 : ip2);

    printf("\n maximum is %d", ans);
}
