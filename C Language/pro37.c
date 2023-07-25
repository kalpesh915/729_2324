#include<stdio.h>

/**
    data type   :   long double
    bytes       :   10 (32 bit) / 12 (64 bit)
    format char :   %Lf
*/

void main(){
    long double pi = 3.8;
    printf("\n value of pi is %Lf", pi);

    printf("\n size of long double is %d bytes ",sizeof(long double));
}
