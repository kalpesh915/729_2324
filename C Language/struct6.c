#include<stdio.h>

/**
    structure is used to combine multiple data types

    struct structure_name{
        members
    }
*/

#define size 10

struct student{
    int roll;
    char name[20];
    float percentage;
};

void main(){
    struct student s1[size];
    int i;
    printf("\n Size of sturcture array is %d bytes",sizeof(s1));

    for(i=0; i<size; i++){
        printf("\n Enter your roll no. s1[%d]\t",i);
        scanf("%d", &s1[i].roll);
        printf("\n Enter your name s1[%d]\t",i);
        scanf("%s", &s1[i].name);
        printf("\n Enter Percentage s1[%d]\t", i);
        scanf("%f", &s1[i].percentage);
    }

    for(i=0; i<size; i++){
        printf("\n Welcome %s your roll no. is %d and percentage are %.2f", s1[i].name, s1[i].roll, s1[i].percentage);
    }

}
