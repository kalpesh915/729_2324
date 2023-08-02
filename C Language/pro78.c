/// check entered both numbers are same or not

#include<stdio.h>

void main(){
    int ip1, ip2;

    printf("\n Enter value for ip1 \t");
    scanf("%d",&ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d",&ip2);

    if(ip1 == ip2){
        printf("\n both numbers are same");
    }else{
        printf("\n both numbers are not same");
    }
}
