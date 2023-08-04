/**
    light bill

    units       rate
    000-100     10
    101-200     11
    201-300     12
    301-NNN     13

    ex. units   123
    100 * 10    =   1000
    023 * 11    =    253
                    1253
*/

#include<stdio.h>

void main(){
    int units, bill, tmp;
    printf("\n Enter units \t");
    scanf("%d", &units);

    if(units >= 0 && units <= 100){
        bill = units * 10;
    }else if(units > 100 && units <= 200){
        tmp = units - 100; /// (100 * 10)
        bill = (tmp * 11) + 1000;
    }else if(units > 200 && units <= 300){
        tmp = units - 200; /// (100 * 10, 100 * 11)
        bill = (tmp * 12) + 2100;
    }else if(units > 300 ){
        tmp = units - 300; /// (100 * 10, 100 * 11, 100 * 12)
        bill = (tmp * 13) + 3300;
    }

    printf("\n Payable amount is %d", bill);
}
