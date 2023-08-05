/**
    switch case
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    switch(ip){
        case 1:{
            printf("\n ip is one");
            break;
        }
        case 2:{
            printf("\n ip is Two");
            break;
        }
        case 3:{
            printf("\n ip is Three");
            break;
        }
        default:{
            printf("\n ip is out of Range");
            break;
        }
    }
}
