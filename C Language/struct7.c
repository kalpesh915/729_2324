#include<stdio.h>

/**
    box structure
*/

struct box{
    int h, w, b;
};

void main(){
    struct box b1;
    printf("\n Size of Structure is %d bytes ",sizeof(b1));
}
