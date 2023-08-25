#include<stdio.h>

/**
    udf 1 : no parameters no return
*/

void msg(); /// declaration

void  main(){
    msg(); /// calling
    msg();
    msg();
    msg();
    msg();
}

/// defination / body
void msg(){
    printf("\n Welcome to world of UDF in C");
}
