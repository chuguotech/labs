#include<iostream>
using namespace std;
int main()
{
    int a[6] = {4,6,9,11,33,99};
    int low = 0;
    int goal = 9;//number to find out
    int high = 5;
    while(low<high) {
        int mid = (low+high)/2;
        if ( a[mid] == goal ) {
            cout<<mid;
            break;
        } else if (a[mid]>goal) {
            high = mid;
        } else {
            low = mid;
        }
    }
}
