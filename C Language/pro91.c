/**
    find entered character is vowel or not
    AEIOU
*/

#include<stdio.h>

void main(){
    char c;
    printf("\n Enter any character \t");
    c = getche();

    if(c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u' || c == 'A' || c == 'E' || c == 'I' || c == 'O' || c == 'U'){
        printf("\n character is vowel");
    }else{
        printf("\n character is consonent");
    }
}
