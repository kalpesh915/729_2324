#include<stdio.h>

/**
    bitwise or operators
    return 1 if any bits are 1
*/

void main(){
    int ip1, ip2, ans;

    ip1 = 14;
    ip2 = 11;

    /**
        ip1     14      1110
        ip2     11      1011
        ans     |       1111
    */

    ans = ip1 | ip2;
    printf("\n answer is %d", ans);
}
