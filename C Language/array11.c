#include<stdio.h>

/**
    check entered value is exist in array or not
    without flag
*/

#define size 10

void main(){
    int ip[size], i, tmp;

    /// loop for get values in array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// get value to be compared
    printf("\n Enter value for compare \t");
    scanf("%d", &tmp);

    /// loop for check values
    for(i=0; i<size; i++){
        if(ip[i] == tmp){
            break;
        }
    }

    /// check value is exist or not
    if(i != 10){
        printf("\n value is exist in array");
    }else{
        printf("\n value is not exist in array");
    }
}
