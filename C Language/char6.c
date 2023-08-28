#include<stdio.h>
#include<ctype.h>

/**
    alpha numeric
*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isalnum(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
