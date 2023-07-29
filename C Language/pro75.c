#include<stdio.h>

/**
    bitwise NOT operators
    inverse the bits
*/

void main(){
    int ip1, ans;

    ip1 = 14;

    /**
        ip1     14      1110
        ans     ~ip1    0001
    */

    ans = ~ip1;
    printf("\n answer is %d", ans);
}
