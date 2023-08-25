#include<stdio.h>

/**
    udf 3 : no parameters with return
*/

float pi();

void  main(){
    float ans;
    ans = pi();
    printf("\n answer is %f", ans);
    printf("\n answer is %f", pi());
}

float pi(){
    return 3.14;
}
