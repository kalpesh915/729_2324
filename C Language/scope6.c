/**
    formal parameters scope
*/

#include<stdio.h>

void sum(int, int);

void main(){
    int ip1, ip2;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    sum(ip1, ip2);
}


void sum(int i, int j){
    /// i and j is known as formal parameters
    printf("\n Sum is %d", i + j);
}
