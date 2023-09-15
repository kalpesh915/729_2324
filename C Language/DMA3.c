#include<stdio.h>
#include<stdlib.h>

/**
    calloc(bytes)
    allocate a specified number of block with specified data type
*/

void main(){
    int size, i, *ptr;

    printf("\n Enter number of blocks to allocate on memory \t");
    scanf("%d", &size);

    ptr = (int*) calloc(size, sizeof(int));

    for(i=0; i<size; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    free(ptr);
}
