#include<stdio.h>
#include<ctype.h>

/**
    with control
*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(iscntrl(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
