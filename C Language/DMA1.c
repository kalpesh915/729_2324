#include<stdio.h>
#include<stdlib.h>

/**
    malloc(bytes)

    allocate a single block of memory and return address of first element
*/

void main(){
    int bytes, *ptr, size, waste, i;

    printf("\n Enter Bytes to allocate on memory \t");
    scanf("%d", &bytes);

    ptr = (int*) malloc(bytes);

    size = bytes / sizeof(int);
    waste = (bytes - (size * sizeof(int)));
    printf("\n Total %d Block created memory waste %d", size, waste);

    for(i=0; i<size; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    free(ptr);
}
