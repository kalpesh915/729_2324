#include<stdio.h>
/**
    print fibonachi series
    0 1 1 2 3 5 8 13 21 34 ......
*/

void main(){
    int ip=0, i, ip1 = 0, ip2 = 1, ip3;

    printf("\n Enter any number \t");
    scanf("%d",&ip);

    printf(" %d %d", ip1, ip2);

    for(i=1; i<=ip; i++){
        ip3 = ip1 + ip2;
        printf(" %d", ip3);
        ip1 = ip2;
        ip2 = ip3;
    }

}




