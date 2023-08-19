#include<stdio.h>
#define size 5

/**
    merge two array in single array
*/

void main(){
    int ip1[size], ip2[size], ip3[size], i;

    /// scan values for ip1 array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip1[%d] \t", i);
        scanf("%d", &ip1[i]);
    }
    /// scan values for ip2 array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip2[%d] \t", i);
        scanf("%d", &ip2[i]);
    }

    for(i=0; i<size; i++){
        ip3[i] = ip1[i] + ip2[i];

        ///printf("\n ip3[%d] = %d", i, ip3[i]);

        printf("\n ip1[%d] : %d + ip2[%d] : %d  = ip3[%d] : %d", i, ip1[i], i, ip2[i], i, ip3[i]);
    }
}
