#include<stdio.h>

/**
    bitwise xor operators
    return 1 if both bits are different
*/

void main(){
    int ip1, ip2, ans;

    ip1 = 14;
    ip2 = 11;

    /**
        ip1     14      1110
        ip2     11      1011
        ans     ^       0101
    */

    ans = ip1 ^ ip2;
    printf("\n answer is %d", ans);
}
