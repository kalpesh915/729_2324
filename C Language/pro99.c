/**
    basic calculator with switch case
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ans;
    char op;
    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n Press + for sum ");
    printf("\n Press - for sub ");
    printf("\n Press * for mul ");
    printf("\n Press / for div ");
    printf("\n Press %% for mod \t");

    op = getche();

    switch(op){
        case '+':{
            ans = ip1 + ip2;
            break;
        }
        case '-':{
            ans = ip1 - ip2;
            break;
        }
        case '*':{
            ans = ip1 * ip2;
            break;
        }
        case '/':{
            ans = ip1 / ip2;
            break;
        }
        case '%':{
            ans = ip1 % ip2;
            break;
        }
        default:{
            ans = 0;
            break;
        }
    }

    printf("\n Answer is %d", ans);
}
