#include<stdio.h>
#include<ctype.h>
/**
    append file
*/

void main(){
    FILE *fp = fopen("data3.txt", "a");
        fputs("Welcome to world of files in c \n", fp);
    fclose(fp);
}
