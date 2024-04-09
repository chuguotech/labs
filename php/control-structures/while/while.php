<?php
/**
while (expr)
{
    statement
}
*/

/** 输出1到100之间的偶数 */
$i = 1;
do 
{
    $i++;
    if ( $i % 2 != 0 ) 
    {
        continue;
    }
    echo $i;
} while($i<=100);
