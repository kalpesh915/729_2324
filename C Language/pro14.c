/// make sum of two numbers and values must get from user in single scanf

#include<stdio.h>

void main(){
    int ip1, ip2, sum;

    printf("\n Enter value for ip1 and ip2 \t");
    scanf("%d%d", &ip1, &ip2);

    sum = ip1 + ip2;

    printf("\n sum is %d",sum);
}
