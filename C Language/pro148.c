/**
    go to keyword use for unconditional jump
*/

#include<stdio.h>

void main(){
    int ans;

    question: /// label
    printf("\n 5 * 5 = ? \t");
    scanf("%d", &ans);

    if(ans == 25){
        printf("\n Correct Answer");
    }else{
        goto question;
    }
}
