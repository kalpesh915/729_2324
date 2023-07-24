/**
    data type   :   short unsigned int
    bytes       :   2
    bits        :   16
    use         :   16
    sign bit    :   0
    range       :   2 ^ 16
    format char :   %u
*/

#include<stdio.h>

void main(){
    short unsigned int ip;
    printf("\n Enter value for ip\t");
    scanf("%u", &ip);
    printf("\n value of ip is %u", ip);
}
