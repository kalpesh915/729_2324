#include<stdio.h>

/**
    find maximum out of 3 numbers with use of
    ternary operator

    syntax :
    ans = (condition ? true value : false value);
*/

void main(){
    int ip1, ip2, ip3, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);
    printf("\n Enter value for ip3 \t");
    scanf("%d", &ip3);

    /**
        ip1     ip2     ip3
        112      132      43
    */

    ans = (ip1 > ip2 ? (ip1 > ip3 ? ip1 : ip3) : (ip2 > ip3 ? ip2 : ip3));

    printf("\n maximum is %d", ans);
}
