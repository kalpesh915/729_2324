#include<stdio.h>
/**
    check entered number is prime or not
*/

void main(){
    int ip, i, flag = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    for(i=2; i<ip; i++){
        if(ip %i == 0){
            flag = 1;
            break; /// use to exit from loop
        }
    }

    if(flag == 0){
        printf("\n Number is Prime");
    }else{
        printf("\n Number is not Prime");
    }
}




