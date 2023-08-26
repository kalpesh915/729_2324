#include<stdio.h>
#include<string.h>

/**
    strcat
    string concat
    strcat(destination, source);
*/

void main(){
    char ip1[100], ip2[100];

    printf("\n Enter your name \t");
    gets(ip1);
    printf("\n Enter your city \t");
    gets(ip2);

    ///strcat(ip1, ip2);
    strcat(ip2, ip1);

    printf("\n new String is %s", ip1);
    printf("\n new String is %s", ip2);
}
