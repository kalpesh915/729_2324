#include<stdio.h>

/**
    type casting
    convert data from one data type to another data type
*/

void main(){
    int ip1, ip2;
    float ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = (float) ip1 / ip2;

    printf("\n answer is %f", ans);
}
