#include<stdio.h>
#include<ctype.h>

/**

*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isdigit(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
