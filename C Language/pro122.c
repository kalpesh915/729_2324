#include<stdio.h>

/**
    draw following pattern with use of nested
    for loop

         *
        * *
       *   *
      *  R  *
     * * * * *
*/

void main(){
    int i,j,s;

    for(i=1; i<=5; i++){
        for(s=4; s>=i; s--){
            printf("-");
        }
        for(j=1; j<=i; j++){
            if(j==1 || j==i || i==5){
                printf(" *");
            }else{
                printf("  ");
            }

        }
        printf("\n");
    }
}
