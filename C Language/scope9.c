/**
    enumeration data type
    user defined data type
*/

#include<stdio.h>

enum days {sunday, monday, tuesday, wednesday, thursday, friday, saturday};

void main(){
    enum days d1;

    d1 = friday;
    printf("\n day is %d", d1);
}
