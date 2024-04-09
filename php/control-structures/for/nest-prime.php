<?php
/** 计算1到100之间的素数 */
for ( $i =2 ;$i<=100;$i++ ) {
    $is_prime = true;
    for ( $j =2 ;$j<$i;$j++ ) {
        if ( $i % $j == 0 ) {
            $is_prime = false;
            break 1;
        }
    }
    if ( $is_prime == true ) {
        echo $i.'是素数';
        echo chr(10);
    }
}
