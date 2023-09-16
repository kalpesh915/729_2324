#include<stdio.h>

int sum(int);

void main(){
    int ip, ans;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    ans = sum(ip);

    printf("\n Answer is %d", ans);
}

int sum(int tmp){
    if(tmp == 0){
        return 0;
    }else{
        return (1 + sum(tmp / 10));
    }
}
