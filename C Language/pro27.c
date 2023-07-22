#include<stdio.h>

/// simple interest

void main(){
    float p, r, n, si;

    printf("\n Enter principal amount \t");
    scanf("%f", &p);
    printf("\n Enter rate of interest \t");
    scanf("%f", &r);
    printf("\n Enter number of years \t");
    scanf("%f", &n);

    si = (p * r * n) / 100;

    printf("\n Simple interest is %f", si);
}
