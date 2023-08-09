#include<stdio.h>

/**
    draw following pattern with use of nested
    for loop

        *
       **
      ***
     ****
    *****
*/

void main(){
    int i, s, j;

    for(i=1; i<=5; i++){
        for(s=4; s>=i; s--){
            printf("-");
        }
        for(j=1; j<=i; j++){
            printf("*");
        }
        printf("\n");
    }
}
