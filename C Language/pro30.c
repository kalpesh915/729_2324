/**
    data type   :   short signed int
    bytes       :   2
    bits        :   16
    use         :   15
    sign bit    :   1
    range       :   2 ^ 15
    format char :   %d
*/

#include<stdio.h>

void main(){
    short signed int ip;
    printf("\n Enter value for ip\t");
    scanf("%d", &ip);
    printf("\n value of ip is %d", ip);
}
