#include<iostream>
using namespace std;


int binary_search(int arr[], int l, int r, int needle) {
    int m = (l+r)/2;
    if ( arr[m] == needle ) {
        return m;
    } else if ( arr[m] > needle ) {
        return binary_search(arr, l, m, needle);
    } else {
        return binary_search(arr, m, r, needle);
    }
}

int main(void)
{
    int arr[] = {11,22,33,44,45,46,55,66};
    int l = 0;
    int r = sizeof(arr)/sizeof(arr[0]);
    int needle = 66;
    cout<<binary_search(arr, l, r, needle);
}

