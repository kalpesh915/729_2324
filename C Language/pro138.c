#include<stdio.h>
/**
    print factorial of entered number
    5 = 5 * 4 * 3 * 2 * 1 = 120
*/

void main(){
    int ip, i, ans=1;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    for(i=ip; i>=1; i--){
        ans = ans * i;
    }

    printf("\n Factorial of %d is %d", ip, ans);
}




