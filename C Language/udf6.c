#include<stdio.h>

/**
    create UDF to convert string in uppercase
    ASCII values
    a - z = 97 - 122
    A - Z = 65 - 090
*/

void toupper(char[]);

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip);

    toupper(ip);
}

void toupper(char tmp[100]){
    int count = 0;

    while(tmp[count] != '\0'){
        if(tmp[count] >= 97 && tmp[count] <= 122){
            tmp[count] = tmp[count] - 32;
        }
        count++;
    }

    printf("\n New String is %s", tmp);
}
