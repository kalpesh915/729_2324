#include<stdio.h>

/**
    create menu driven banking application for
    deposit
    withdrwal
    balance_inq
*/

void deposit();
void withdrwal();
void balance_inq();

/// global balance
double balance = 0;

void main(){
    int opt;

    while(opt !=0){
        printf("\n ******************************* \n");
        printf("\n Press 1 for Deposit");
        printf("\n Press 2 for whithdrwal");
        printf("\n Press 3 for Balance ");
        printf("\n Press 0 for Exit \t");
        scanf("%d", &opt);

        switch(opt){
            case 1:{
                deposit();
                break;
            }

            case 2:{
                withdrwal();
                break;
            }

            case 3:{
                balance_inq();
                break;
            }

            case 0:{
                printf("\n Thanks for using banking system");
                break;
            }

            default:{
                printf("\n Invalid Operation Selected");
                break;
            }
        }
    }
}

void deposit(){
    double amount;
    printf("\n Enter amount for deposit \t");
    scanf("%lf", &amount);

    if(amount > 0){
        balance = balance + amount;
        balance_inq();
    }else{
        printf("\n invalid amount");
    }
}

void withdrwal(){
    double amount;

    printf("\n Enter amount for withdrwal \t");
    scanf("%lf", &amount);

    if(amount > 0){
        if(amount > balance){
            printf("\n not enough balance in account \t");
            balance_inq();
        }else{
            if(balance - amount >= 5000){
                balance = balance - amount;
                balance_inq();
            }else{
                printf("\n Please maintain minimum balance ");
                balance_inq();
            }
        }
    }else{
        printf("\n Invalid amount");
    }
}

void balance_inq(){
    printf("\n Your Current Balance is %lf", balance);
}
