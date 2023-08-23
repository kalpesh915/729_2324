#include<stdio.h>

/**
    Matrix multiplication

    Array 1         Array 2
    0   1           0   1   2
0   1   2           5   6   7

1   3   4           8   9   10

Array1 * Array2 =
                [1*5 + 2*8  1*6 + 2*9  1*7 + 2*10]
                [3*5 + 4*8  3*6 + 4*9  3*7 + 4*10]


*/

#define size 10

void main(){
    int array1[size][size], array2[size][size], ans[size][size];
    int row, column, i, j, k;

    printf("\n Enter Number of Rows for Matrix \t");
    scanf("%d", &row);
    printf("\n Enter Number of Columns for Matrix \t");
    scanf("%d", &column);

    printf("\n Enter value for First Matrix \t");

    for(i=0; i<row; i++){
        for(j=0; j<column; j++){
            printf("\n Enter value for array1[%d][%d] \t",i, j);
            scanf("%d", &array1[i][j]);
        }
    }

    printf("\n Enter value for Second Matrix \t");

    for(i=0; i<row; i++){
        for(j=0; j<column; j++){
            printf("\n Enter value for array2[%d][%d] \t",i, j);
            scanf("%d", &array2[i][j]);
        }
    }

    /**
        matrix multiplication process
    */

    for(i=0; i<row; i++){
        for(j=0; j<column; j++){
            ans[i][j] = 0;
            for(k=0; k<column; k++){
                ans[i][j] += array1[i][k] * array2[k][j];
            }
        }
    }


    /// printing answer

    for(i=0; i<row; i++){
        for(j=0; j<column; j++){
            printf(" ans[%d][%d] : %d", i, j, ans[i][j]);
        }
        printf("\n");
    }
}
