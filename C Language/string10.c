#include<stdio.h>
#include<string.h>

/**
    check entered string is palindrome or not
*/

void main(){
    char ip1[100], ip2[100];
    int ans;
    printf("\n Enter first string \t");
    gets(ip1);


    /// copy string1 to string2
    strcpy(ip2, ip1);

    /// reverse the second string
    strrev(ip2);

    ans = strcmp(ip1, ip2);

    if(ans == 0){
        printf("\n String is palindrome");
    }else{
        printf("\n Try another String");
    }
}
