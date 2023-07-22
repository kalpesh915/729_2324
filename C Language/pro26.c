#include<stdio.h>

/// float data type (11.22, 12.23, 98.44)

void main(){
    float ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%f", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%f", &ip2);

    ans = ip1 / ip2;
    printf("\n answer is %f", ans);
    printf("\n answer is %.2f", ans);
}
