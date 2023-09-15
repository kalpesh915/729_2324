#include<stdio.h>
#include<stdlib.h>
#include<dos.h>

void main(){
    int i;

    for(i=1; i<=10; i++){
        delay(100);
        printf(" %d", rand());
    }
}
