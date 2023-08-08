#include<stdio.h>

/**
    print all even values between 0 to 100
    2 4 6 8 . . . . . .
*/

void main(){
    int i;

    for(i=1; i<=100; i++){
        if(i %2 == 0){
            printf(" %d", i);
        }
    }
}
