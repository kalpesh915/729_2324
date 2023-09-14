#include<stdio.h>
#include<ctype.h>
/**
    read data from file
*/

void main(){
    char ip;
    FILE *fp = fopen("data2.txt", "r");
        while(!feof(fp)){ /// file check end of file
            ip = fgetc(fp);
            if(islower(ip)){
                ip = toupper(ip);
            }
            printf("%c", ip);
        }
    fclose(fp);
}
