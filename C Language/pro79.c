/**
    check entered number is odd or even
    odd = 1, 3, 5, 7, 9....
    even = 2, 4, 6, 8, 10.....
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any value for ip \t");
    scanf("%d", &ip);
    if(ip %2 == 0){
        printf("\n Even");
    }else{
        printf("\n Odd");
    }
}
