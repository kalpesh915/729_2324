#include<stdio.h>
#define size 10

/**
    sort array in ascending order
*/

void main(){
    int ip[size], i, j, tmp;

    /// get values from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }


    /// sorting code
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(ip[i] < ip[j]){
               tmp = ip[i];
               ip[i] = ip[j];
               ip[j] = tmp;
            }
        }
    }

    /// printing values
    for(i=0; i<size; i++){
        printf(" %d", ip[i]);
    }
}
