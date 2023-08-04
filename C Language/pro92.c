/**
    find entered character is vowel or not
    AEIOU
*/

#include<stdio.h>

void main(){
    char c;
    int uv, lv;
    printf("\n Enter any character \t");
    c = getche();

    uv = (c == 'A' || c == 'E' || c == 'I' || c == 'O' || c == 'U');
    lv = (c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u');

    if(uv || lv){
        printf("\n character is vowel");
    }else{
        printf("\n character is consonent");
    }
}
