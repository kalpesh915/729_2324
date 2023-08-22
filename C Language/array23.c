#include<stdio.h>

/**
    check entered value is exist in 2d Array or not
*/

#define size 3

void main(){
    int ip[size][size], i, j, tmp, flag = 0;

    /// get data in array
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// get value for search in array
    printf("\n Enter value for search in array \t");
    scanf("%d", &tmp);


    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(ip[i][j] == tmp){
                flag = 1;
                break;
            }
        }
    }

    if(flag == 1){
        printf("\n Value Exist in Array");
    }else{
        printf("\n Value is Not Exist in Array");
    }
}
