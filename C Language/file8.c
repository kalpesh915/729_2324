#include<stdio.h>
#include<ctype.h>
/**
    read data from file
*/

void main(){
    char ip[100];
    FILE *fp = fopen("data3.txt", "r");
    printf("\n Get pointer on %d", ftell(fp));
    fgets(ip,100, fp);
    printf("\n Get pointer on %d", ftell(fp));
    fclose(fp);
}
