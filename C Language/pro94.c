/**
    income tax calculator

    income              tax
    000000-500000       0%
    500001-750000       10%
    750001-1000000      20%
    1000000-NNNNNNN     30%

    senior cityzen discount 3%
    female tax payers discount 2%
*/

#include<stdio.h>

void main(){
    int income, age;
    float tax;
    char gender;

    /// fflush(stdin);
    printf("\n Enter Income \t");
    scanf("%d", &income);
    printf("\n Enter Age \t");
    scanf("%d", &age);
    printf("\n Select Gender ( m | f) \t");
    gender = getche();

    printf("\n Income is %d", income);
    printf("\n Age is %d", age);
    printf("\n Selected Gender is %c", gender);

    if(income >= 0 && income <= 500000){
        tax = 0;
    }else if(income > 500000 && income <= 750000){
        if(gender == 'f' || gender == 'F'){
            if(age >= 60){
                tax = (float)income * 0.05;
            }else{
                tax = (float)income * 0.08;
            }
        }else if(gender == 'm' || gender == 'M'){
            if(age >= 60){
                tax = (float)income * 0.07;
            }else{
                tax = (float)income * 0.10;
            }
        }else{
            printf("\n invalid gender selected");
        }
    }else if(income > 750000 && income <= 100000){
        if(gender == 'f' || gender == 'F'){
            if(age >= 60){
                tax = (float)income * 0.15;
            }else{
                tax = (float)income * 0.18;
            }
        }else if(gender == 'm' || gender == 'M'){
            if(age >= 60){
                tax = (float)income * 0.17;
            }else{
                tax = (float)income * 0.20;
            }
        }else{
            printf("\n invalid gender selected");
        }
    }else if(income > 1000000 ){
        if(gender == 'f' || gender == 'F'){
            if(age >= 60){
                tax = (float)income * 0.25;
            }else{
                tax = (float)income * 0.28;
            }
        }else if(gender == 'm' || gender == 'M'){
            if(age >= 60){
                tax = (float)income * 0.27;
            }else{
                tax = (float)income * 0.30;
            }
        }else{
            printf("\n invalid gender selected");
        }
    }

    printf("\n Payable Tax is %f", tax);
}
