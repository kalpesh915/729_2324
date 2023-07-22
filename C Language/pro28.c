#include<stdio.h>

/// find square of entered number

void main(){
    int ip1, ans;

    printf("\n Enter any number to find square \t");
    scanf("%d", &ip1);

    ans = ip1 * ip1;
    printf("\n square of %d is %d", ip1, ans);
}
