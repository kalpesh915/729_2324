/**
    check entered number is palindrome or not
    12321
    >> <<
*/

#include<stdio.h>

void main(){
    int ip, ans = 0, tmp;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    tmp = ip;

    while(ip > 0){
        ans = ans * 10;
        ans = ans + ip % 10;
        ip = ip / 10;
    }

    if(ans == tmp){
        printf("\n number is palindrome");
    }else{
        printf("\n try another number");
    }
}
