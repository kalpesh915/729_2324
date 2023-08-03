/**
    check entered number is positive or negative
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 > 0){
        printf("\n positive number");
    }else{
        printf("\n Negative number");
    }
}
