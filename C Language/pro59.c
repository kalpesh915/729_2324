#include<stdio.h>

/**
    logical operator
    && and
    both conditions must be true

    Truth table

    condition 1     condition 2     answer
    true            false           false
    false           true            false
    false           false           false
    true            true            true
*/

void main(){
    printf("\n answer is %d", (10 > 5 && 10 > 15));
    printf("\n answer is %d", (10 > 50 && 10 > 5));
    printf("\n answer is %d", (10 > 50 && 10 > 15));
    printf("\n answer is %d", (10 > 5 && 100 > 15));
}
