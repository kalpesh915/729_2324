#include<stdio.h>
#define size 10

/**
    seprate odd and even values in different arrays

    oc = odd counter
    ec = even counter
*/

void main(){
    int ip1[size], odd[size], even[size], i, oc=0, ec=0;

    /// scan values from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip1[%d] \t", i);
        scanf("%d", &ip1[i]);
    }

    /// loop for seprate values
    for(i=0; i<size; i++){
        if(ip1[i] %2 == 0){
            even[ec] = ip1[i];
            ec++;
        }else{
            odd[oc] = ip1[i];
            oc++;
        }
    }

    /// printing values
    printf("\n Even Values \n");
    for(i=0; i<ec; i++){
        printf(" %d", even[i]);
    }

    printf("\n Odd Values \n");
    for(i=0; i<oc; i++){
        printf(" %d", odd[i]);
    }
}
