#include<stdio.h>

/**
    udf 4 : with parameters with return
*/

int square(int);

void  main(){
    int ip, ans;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);

    ans = square(ip);
    printf("\n Square of %d is %d", ip, ans);

    ans = cube(ip);
    printf("\n cube of %d is %d", ip, ans);
}

int square(int tmp){
    return tmp * tmp;
}

int cube(int tmp){
    return tmp * tmp * tmp;
}
