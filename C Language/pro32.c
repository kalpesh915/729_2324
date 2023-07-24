/**
    data type   :   long signed int
    bytes       :   4
    bits        :   32
    use         :   31
    sign bit    :   1
    range       :   2 ^ 31
    format char :   %ld
*/

#include<stdio.h>

void main(){
    long signed int ip;
    printf("\n Enter value for ip\t");
    scanf("%ld", &ip);
    printf("\n value of ip is %ld", ip);
}
