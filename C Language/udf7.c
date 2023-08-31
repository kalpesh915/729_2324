#include<stdio.h>

/**
    create UDF to convert string in uppercase
    ASCII values
    a - z = 97 - 122
    A - Z = 65 - 090
*/

void tolower(char[]);

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip);

    tolower(ip);
}

void tolower(char tmp[100]){
    int count = 0;

    while(tmp[count] != '\0'){
        if(tmp[count] >= 65 && tmp[count] <= 90){
            tmp[count] = tmp[count] + 32;
        }
        count++;
    }

    printf("\n New String is %s", tmp);
}
