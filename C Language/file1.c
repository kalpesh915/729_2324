#include<stdio.h>

/**
    write data in file
*/

void main(){
    char ip[100];
    FILE *fp = fopen("data1.txt", "w");
    printf("\n Enter data to write in file \t");
    gets(ip);
    fputs(ip, fp);
    fclose(fp);

}
