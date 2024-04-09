#include<stdio.h>

void main()
{
    int i,j,is_prime;
    int n=100; 

    for ( i=2; i<=n; i++ ) {

        is_prime = 1; //每次循坏默认为素数

        for ( j=2; j<i; j++ ) {

            if ( i % j == 0 ) {
                // i 不是素数
                is_prime = 0;
                break;
            }

        }

        if ( is_prime ==1 ) {
            printf("%d 是素数\n", i);
        }

    }
}
