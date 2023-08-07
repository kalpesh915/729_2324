#include<stdio.h>

/**
    print table of entered number
*/

void main(){
    int ip, i;

    i = 1;

    printf("\n Enter any value for print table \t");
    scanf("%d", &ip);

    while(i <= 10){
        printf("\n %5d * %5d = %5d", ip, i, ip * i);
        i++;
    }
}
