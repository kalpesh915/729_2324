#include<stdio.h>

/// find cube of entered number

void main(){
    int ip1, ans;

    printf("\n Enter any number to find cube \t");
    scanf("%d", &ip1);

    ans = ip1 * ip1 * ip1;
    printf("\n cube of %d is %d", ip1, ans);
}
