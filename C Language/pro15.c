/// convert entered kilometers to meters

#include<stdio.h>

void main(){
    int kilometer, meters;

    printf("\n Enter kilometers \t");
    scanf("%d", &kilometer);

    meters = kilometer * 1000;
    printf("\n %d kilometers in meters is %d", kilometer, meters);
}
