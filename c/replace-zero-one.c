#include<stdio.h>
int convert();
int replace();
int main() 
{
    int number;
    printf("Enter the number:\n");
    scanf("%d", &number);
    printf("After replace zero char to one:%d", convert(number));
}

int convert(int number) {
    if ( number == 0 ) return 1;
    return replace(number);
}

int replace(int number) {
    int last_digit;
    if ( number == 0 ) return 0;
    last_digit = number % 10;
    if ( last_digit == 0 ) {
        last_digit = 1;
    }
    return replace(number / 10) * 10 + last_digit;
}
