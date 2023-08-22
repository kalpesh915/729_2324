#include<stdio.h>

/**
    sort 2D array in ascending order

    ip2     0   1   2
    0       12  34  44
    1       11  36  67
    2       98  77  86

    ip1
    0   1   2   3   4   5   6   7   8
    12  34  44  11  36  67  98  77  86
*/

#define size 3

void main(){
    int ip2[size][size], i, j, k, tmp, ip1[size * size];

    /// get values in 2D Array
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip2[%d][%d] \t", i, j);
            scanf("%d", &ip2[i][j]);
        }
    }

    /// convert 2D array to 1D Array
    k = 0;
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            ip1[k] = ip2[i][j];
            k++;
        }
    }

    /// code for sorting 1D array to ascending order
    for(i=0; i<size*size; i++){
        for(j=0; j<size*size; j++){
            if(ip1[i] < ip1[j]){
                tmp = ip1[i];
                ip1[i] = ip1[j];
                ip1[j] = tmp;
            }
        }
    }


    /// store 1D array to 2D array
    k=0;
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            ip2[i][j] = ip1[k];
            k++;
        }
    }

    /// printing sorted array
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf(" ip2[%d][%d] : %d", i, j, ip2[i][j]);
        }
        printf("\n");
    }
}
