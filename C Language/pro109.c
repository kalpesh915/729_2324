#include<stdio.h>

/**
    for(init; condition; incre / decre){
        loop body / statements
    }

    get 10 numbers from user and make sum
*/

void main(){
    int i, ip, ans = 0;

    for(i=1; i<=10; i++){
        printf("\n Enter any number \t");
        scanf("%d", &ip);

        ans += ip;

    }

    printf("\n Sum is %d", ans);
}
