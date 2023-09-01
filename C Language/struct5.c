#include<stdio.h>

/**
    structure is used to combine multiple data types

    struct structure_name{
        members
    }
*/

struct {
    int roll;
    char name[20];
    float percentage;
}s1, s2; /// you can also declare structure variable here

void main(){

    printf("\n Enter your roll no. \t");
    scanf("%d", &s1.roll);
    printf("\n Enter your name \t");
    scanf("%s", &s1.name);
    printf("\n Enter Percentage \t");
    scanf("%f", &s1.percentage);

    s2 = s1;
    printf("\n Welcome %s your roll no. is %d and percentage are %.2f", s1.name, s1.roll, s1.percentage);
    printf("\n Welcome %s your roll no. is %d and percentage are %.2f", s2.name, s2.roll, s2.percentage);
}
