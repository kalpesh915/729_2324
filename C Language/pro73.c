#include<stdio.h>

/**
    bitwise right shift operators
    shift bits from left to right
*/

void main(){
    int ip1, ans;

    ip1 = 14;

    /**
        ip1     14      1110
        ans     >> 2    0011
    */

    ans = ip1 >> 2;
    printf("\n answer is %d", ans);
}
