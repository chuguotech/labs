#include<stdio.h>
void main()
{
    FILE * fa;
    FILE * fb;
    int c;

    fa = fopen("a", "rb");
    fseek(fa, 0L, SEEK_SET);

    fb = fopen("b", "wb");

    while ( ( c = fgetc(fa) ) != EOF ) {
        fputc(c, fb);
    }

    fclose(fa);
    fclose(fb);
}
