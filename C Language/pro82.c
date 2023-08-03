/**
    find largest number from entered 2 numbers
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    if(ip1 > ip2){
        ans = ip1;
    }else{
        ans = ip2;
    }

    printf("\n answer is %d", ans);
}
