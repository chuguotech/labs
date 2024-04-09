#include <stdio.h>
int GCD(int x, int y) {
	if ( y == 0 ) {
		return x;
	}
	return GCD(y, x % y);
}

int main() {
	int a, b;
	printf("请输入整数a:\n");
	scanf("%d", &a);
	printf("请输入整数b:\n");
	scanf("%d", &b);
	printf("%d和%d的最大公约数是：%d\n", a, b, GCD(a, b));
}
