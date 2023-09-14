#include<stdio.h>

/**
    read data from file
*/

void main(){
    char ip;
    FILE *fp = fopen("data2.txt", "r");
        while(!feof(fp)){ /// file check end of file
            ip = fgetc(fp);
            printf(" %c", ip);
        }
    fclose(fp);
}
