
//埃拉托色尼筛选法(the Sieve of Eratosthenes)

#include<stdio.h>
void main()
{
    int i,j,k;
    int n=100; //筛选100以内的素数

    int primes[n];//素数标记
    //primes[i] = 1 素数
    //primes[i] = 0 合数

    primes[1] = 0; //1不是素数
    //初始默认所有数都是素数
    for ( i=2; i<=n; i++ ) {
        primes[i] = 1;
    }


    //开始筛除合数
    for ( j=2; j*j<=n; j++ ) {
        if ( primes[j] == 1 ) {
            //如果j=2, 那么2*2=4, 2*3=6, 2*4=8, 2*5=10 ... 都是合数
            //如果j=3, 那么3*3=9, 3*4=12, 3*5=15, 3*6=18 ... 都是合数
            //合数数列规则：j*j, j*j+j, j*j+2j, j*j+3j 
            // j 最大值取 sqrt(n) 即可
            for ( k=j*j; k<=n; k=k+j ) {
                if ( primes[k] = 1 ) {
                    primes[k] = 0;
                }
            }
        }
    }

    //输出筛选出的素数
    for ( i=1;i<=n;i++ ) {
        if ( primes[i] == 1 ) {
            printf("%d\t", i);
        }
    }
}

