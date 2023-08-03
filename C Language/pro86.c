/**
    create student result with 4 subjects
*/

#include<stdio.h>

void main(){
    int sub1, sub2, sub3, sub4, total;
    float percentage;

    printf("\n Enter marks for subject 1 \t");
    scanf("%d", &sub1);
    printf("\n Enter marks for subject 2 \t");
    scanf("%d", &sub2);
    printf("\n Enter marks for subject 3 \t");
    scanf("%d", &sub3);
    printf("\n Enter marks for subject 4 \t");
    scanf("%d", &sub4);

    if(sub1 >= 35 && sub2>= 35 && sub3 >= 35 && sub4 >= 35){
        total = sub1 + sub2 + sub3 + sub4;
        percentage = (float) total / 4;

        printf("\n Total Marks are %d", total);
        printf("\n Percentage are %f", percentage);
    }else{
        printf("\n Batter luck next time");
    }
}
