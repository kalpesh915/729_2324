#include<stdio.h>

/**
    values after index 4 is not accessible or
    it will return garbage values
*/

void main(){
              /// 0   1   2   3   4
    int ip[5] = {11, 22, 33, 44, 55, 66, 77, 88, 99};

    printf("\n Size of ip is %d Bytes ", sizeof(ip));

    printf("\n value of ip[0] is %d", ip[5]);
}
