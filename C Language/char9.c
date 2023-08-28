#include<stdio.h>
#include<ctype.h>

/**
    lower case
*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(islower(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
