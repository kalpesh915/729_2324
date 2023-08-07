#include<stdio.h>

/**
    make sum of first 10 numbers
    1 to 10
*/

void main(){
    int i = 1, sum = 0;

    while(i<=10){
        sum += i;
        i++;
    }

    printf("\n sum is %d", sum);
}
