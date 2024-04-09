<?php

/**
This demo code from 
https://stackoverflow.com/questions/5506888/permutations-all-possible-sets-of-numbers
*/

function permutations(array $elements)
{
    if (count($elements) <= 1) {
        yield $elements;
    } else {
        foreach (permutations(array_slice($elements, 1)) as $permutation) {
            foreach (range(0, count($elements) - 1) as $i) {
                yield array_merge(
                    array_slice($permutation, 0, $i),
                    [$elements[0]],
                    array_slice($permutation, $i)
                );
            }
        }
    }
}



$list = ['a', 'b', 'c'];

foreach (permutations($list) as $permutation) {
    echo implode(',', $permutation) . PHP_EOL;
}


//output
/**
a,b,c
b,a,c
b,c,a
a,c,b
c,a,b
c,b,a
*/
