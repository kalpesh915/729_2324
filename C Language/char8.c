#include<stdio.h>
#include<ctype.h>

/**
    upper case
*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isupper(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
