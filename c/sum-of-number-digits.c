#include <stdio.h>

int main() {
	long number = 999;
	int sum = 0;
	printf("%ld的各位数字之和是", number);
	while ( 1 ) {
		if ( number < 10 ) {
			sum = sum + number;
			break;
		} else {
			sum += number % 10;
			number = number / 10;
		}
	}
	printf("%d", sum);
}
