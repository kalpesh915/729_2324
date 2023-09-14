#include<stdio.h>
#include<ctype.h>
/**
    read data from file
*/

void main(){
    char ip[100];
    FILE *fp = fopen("data3.txt", "r");
        while(!feof(fp)){
            fgets(ip, 100, fp);
            printf("%s", ip);
        }
    fclose(fp);
}
