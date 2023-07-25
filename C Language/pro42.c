#include<stdio.h>

/**
    get single character from user and print ASCII

    a to z = 97 to 122
    A to Z = 65 to 90
    0 to 9 = 48 to 57
*/

void main(){
    char ip;
    printf("\n Enter any character to get ASCII \t");
    ip = getche();
    printf("\n character is %c and ASCII is %d", ip, ip);
}
