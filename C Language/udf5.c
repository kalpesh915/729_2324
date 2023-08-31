#include<stdio.h>

/**
    create UDF to find length of entered string

    index
    012345678
    bhavdeep\0 = null
*/

int findlength(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    ans = findlength(ip);

    printf("\n Length of string is %d", ans);
}

int findlength(char tmp[100]){
    int count = 0;

    while(tmp[count] != '\0'){
        count++;
    }
    return count;s
}
