<?php
//自定义变量的命名

//有效的变量名
$a
$_a
$__b
$aB_c
$a_c_1
$∞
$Φ


//错误的变量名
$#
$@
$123
$-a

//系统保留的变量名
$this

//可变变量
$a = 'b';
$b = 'c';
$c = 'd';
echo $$a;
echo $$$a;