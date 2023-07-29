#include<stdio.h>

/**
    bitwise left shift operators
    shift bits from right to left
*/

void main(){
    int ip1, ans;

    ip1 = 14;

    /**
        ip1     14      1110
        ans     << 2  111000
    */

    ans = ip1 << 2;
    printf("\n answer is %d", ans);
}
