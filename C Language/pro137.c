#include<stdio.h>
/**
    arm strong number

    sum of cube of all digits are same as
    entered number that number is known as
    arm strong number

    371

    cube of 3 is 027
    cube of 7 is 343
    cube of 1 is 001
                 371
*/

void main(){
    int ip, tmp, num, cube, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    tmp = ip;

    /**
        you can use while(ip > 0) or while(ip != 0)
    */

    while(tmp != 0){
        num = tmp % 10;
        cube = num * num * num;
        ans += cube;

        tmp = tmp / 10;
    }

    if(ans == ip){
        printf("\n Number is Armstrong");
    }else{
        printf("\n Try another Number");
    }
}




