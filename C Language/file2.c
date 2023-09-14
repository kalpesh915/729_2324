#include<stdio.h>

/**
    read data in file
*/

void main(){
    char ip[100];
    FILE *fp = fopen("data1.txt", "r");

    fgets(ip, 10, fp); /// char array, number of bytes, file pointer
    printf("\n Data From file is : %s", ip);
    fclose(fp);

}
