<?php
//扁平化多维数组
//代码来源
/*
https://stackoverflow.com/questions/35293989/php-multidimensional-array-to-flatten-with-keys
https://stackoverflow.com/users/574632/steve
*/
$nested = array(
    'Orange',
    'Grape',
    'Banana' => array(
        'Big',
        'Small'
    ),
    'Apple' => array(
        'Red',
        'Green' => array(
            'Soft',
            'Hard'
        )
    )
);

function flattern($array)
{
    $flat=[];
    foreach($array as $key=>$val){
        if(is_array($val)){
            $flat[]=$key;
            $flat = array_merge($flat, flattern($val));
        }else{
            $flat[]=$val;
        }
    }
    return $flat;
}

var_dump(flattern($nested));
