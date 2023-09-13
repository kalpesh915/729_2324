#include<stdio.h>

/**
    & use to get address of any variable
    * use to declare pointer and goto at specified location

    call by value concept
*/

void swap(int, int);

void main(){
    int ip1, ip2;
    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n value before swap ip1 is %d and ip2 is %d", ip1, ip2);
    swap(ip1, ip2);
    printf("\n value after swap ip1 is %d and ip2 is %d", ip1, ip2);
}

void swap(int ip1, int ip2){
    int tmp;

    tmp =  ip1;
    ip1 = ip2;
    ip2 = tmp;
    printf("\n value in swap() ip1 is %d and ip2 is %d", ip1, ip2);
}
