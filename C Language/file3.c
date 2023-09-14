#include<stdio.h>

/**
    write data in file until user press X
*/

void main(){
    char ip;
    FILE *fp = fopen("data2.txt", "w");
    printf("\n Write data in file press X for exit \n");

    while(ip != 'X'){
        ip = getche();
        if(ip == 'X'){
            break;
        }
        fputc(ip, fp);
    }
    printf("\n File Writing completed");
    fclose(fp);
}
