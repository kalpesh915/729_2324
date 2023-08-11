/**
    count how many digits in entered number
*/

#include<stdio.h>

void main(){
    int ip, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans++;
        ip = ip / 10;
    }

    printf("\n total digits are %d", ans);
}
