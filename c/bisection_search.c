#include<stdio.h>

#define N 10

int find();

int main () {

    int needle;

    int haystack[N] = {10,20,30,40,50,60,70,80,90,100};

    printf("needle that you want to find:\n");
    scanf("%d", &needle);

    int pos = find(needle, haystack, 0, N);
    printf("needle found at position %d", pos+1);

}

//二分查找
int find(int n,int h[],int l,int r) {
    int m;
    m = (l + r ) / 2;
    if ( n == h[m] ) return m;
    if ( n >  h[m] ) {
        l = m;
        return find(n,h,l,r);
    } else if ( n < h[m] ) {
        r = m;
        return find(n,h,l, r);
    }
}
