#include<stdio.h>

/**
    for(init; condition; incre / decre){
        loop body / statements
    }

    print table of given number
*/

void main(){
    int i, ip;

    printf("\n Enter any number to print table \t");
    scanf("%d", &ip);

    for(i=1; i<=10; i++){
        printf("\n %5d * %5d = %5d", ip, i, ip * i);
    }
}
