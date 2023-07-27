#include<stdio.h>

/**
    relational operator
    > less than

    5 < 15      true (1)
    100 < 12     false (0)
*/

void main(){
    printf("\n answer is %d",(15 < 5));
    printf("\n answer is %d",(5 < 15));
    printf("\n answer is %d",(50 < 150));
    printf("\n answer is %d",(51 < 15));
    printf("\n answer is %d",(15 < 15));
    printf("\n answer is %d",(15 <= 15));
}
