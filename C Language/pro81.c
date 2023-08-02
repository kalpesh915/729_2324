/**
    check entered year is leap year or not
    february month have 29 days
*/

#include<stdio.h>

void main(){
    int year;

    printf("\n Enter any year \t");
    scanf("%d", &year);

    if((year %4 == 0) && ((year % 400 == 0) || (year %100 != 0))){
        printf("\n Leap Year");
    }else{
        printf("\n Non Leap Year");
    }
}
