<?php
/** continue 的使用 */

/** 输出1到100之间的奇数 */
for ( $i=1 ;$i<=100;$i++ ) 
{
    if ( $i % 2 == 0 ) {
        continue 2;
    }
    echo $i;
    echo chr(10);
}
