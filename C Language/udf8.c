#include<stdio.h>

/**
    string compare
*/

int compare(char[], char[]);

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip1);
    printf("\n Enter any string \t");
    gets(ip2);

    ans = compare(ip1, ip2);
    ///printf("\n diffrenece is %d", ans);

    if(ans == 0){
        printf("\n Both strings are same");
    }else{
        printf("\n Both strings are not same");
    }
}

int compare(char tmp1[100], char tmp2[100]){
    int count = 0, ans = 0;

    while(tmp1[count] != '\0' || tmp2[count] != '\0'){
        if(tmp1[count] != tmp2[count]){
            ans = tmp1[count] - tmp2[count];
            break;
        }
        count++;
    }

    return ans;
}
