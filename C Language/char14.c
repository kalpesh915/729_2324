#include<stdio.h>
#include<ctype.h>

/**
    get a string from user and count total length,
    characters, digits, words, special character,
    upper, lower
*/

void main(){
    char ip[100], c;
    int i=0, cc=0, uc=0, lc=0, scc=0, dc=0, wc=1;

    printf("\n Enter any string \t");
    gets(ip);

    while(ip[i] != '\0'){

        c = ip[i];

        if(isalpha(c)){
            cc++;
            if(isupper(c)){
                uc++;
            }else{
                lc++;
            }
        }else if(isdigit(c)){
            dc++;
        }else if(isspace(c)){
            wc++;
        }else if(ispunct(c)){
            scc++;
        }

        i++;
    }

    printf("\n Total Length of String is %d", i);
    printf("\n Total Alphabets is %d", cc);
    printf("\n Total Upper Alphabets is %d", uc);
    printf("\n Total Lower Alphabets is %d", lc);
    printf("\n Total Digits is %d", dc);
    printf("\n Total Special Characters is %d", scc);
    printf("\n Total Words is %d", wc);
}
