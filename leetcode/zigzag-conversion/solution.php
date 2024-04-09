<?php
/**
 * @Author Tonvin Tian<itonvin@gmail.com>
 * @Date 2021/02/05
 */
class Solution {
	/**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $r = $numRows;
        if ( $r == 1 ) return $s;
        $x = 0;
        $y = 0;
        $l = strlen($s);
        for ( $i=0; $i<$l; $i++ ) {
            $_x = $x;
            if ( $x % ($r-1) == 0 ) {
                $x *= -1;
            }
            $res[abs($x)][$y] = $s[$i];
            if ( $x < 0 ) {
                $y++;
            }
            $x++;
        }
        $out = '';
        for ( $i=0;$i<$r;$i++) {
            for ( $j=0;$j<=$y;$j++) {
                if ( isset($res[$i][$j]) ) {
                    echo $res[$i][$j];
                    $out .= $res[$i][$j];
                } else {
                    echo '.';
                }
                echo chr(9);
            }
            echo chr(10);
        }
        return $out;
    }
}


//Test

$obj = new Solution();

$s = 'PAYPALISHIRING';
$numRows = 4;
if ( 'PINALSIGYAHRPI' == $obj->convert($s, $numRows) ) {
    echo 'OK';
}

echo PHP_EOL;


$s = 'PAYPALISHIRING';
$numRows = 3;
if ( 'PAHNAPLSIIGYIR' == $obj->convert($s, $numRows) ) {
    echo 'OK';
}

echo PHP_EOL;

$s = 'A';
$numRows = 1;
if ( 'A' == $obj->convert($s, $numRows) ) {
    echo 'OK';
}
