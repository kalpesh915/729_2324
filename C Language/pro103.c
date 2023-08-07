#include<stdio.h>

/**
    make sum of 10 numbers entered by user
    1 to 10
*/

void main(){
    int i = 1, ans = 0, ip;

    while(i <= 10){
        printf("\n Enter any number \t");
        scanf("%d", &ip);

        ans = ans + ip;

        i++;
    }

    printf("\n sum is %d", ans);
}
