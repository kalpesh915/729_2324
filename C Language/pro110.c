#include<stdio.h>

/**
    for(init; condition; incre / decre){
        loop body / statements
    }

    get 10 numbers from user and find maximum
*/

void main(){
    int i, ip, ans = 0;

    for(i=1; i<=10; i++){
        printf("\n Enter any number \t");
        scanf("%d", &ip);

        if(ans < ip){
            ans = ip;
        }

    }

    printf("\n Maximum is %d", ans);
}
