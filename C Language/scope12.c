/**
    enumeration data type
    user defined data type
*/

#include<stdio.h>

enum boolean {false, true};

void main(){
    enum boolean status;

    status = true;
    if(status){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
