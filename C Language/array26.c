#include<stdio.h>

/**
    3D Array

    0                   1               2
        0   1   2           0   1   2       0   1   2
    0           11
    1                                       15
    2                           10
*/

void main(){
    int ip[3][3][3];

    printf("\n Size of Array is %d Bytes ",sizeof(ip));
    /// [block][row][column]
    ip[1][2][1] = 10;
}
