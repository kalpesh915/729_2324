#include<stdio.h>

/**
    character data type
    size    1byte
    bits    8
    range   0 to 255 (ASCII)
*/

void main(){
    char ip;
    printf("\nEnter any character \t");
    scanf("%c", &ip);
    printf("\n you entered %c", ip);
}
