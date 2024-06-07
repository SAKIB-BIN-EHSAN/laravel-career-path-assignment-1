<?php

/**
 * This function takes an array of integers
 * and returns the smallest absolute integer from the array.
 * 
 * @param Array
 * @return Integer
 */
function findMinimumNumber($arr)
{
    $arrLength = count($arr);

    if ($arrLength == 0) {
        echo "No number provided.\n";
        return;
    }

    $minValue = abs($arr[0]);
    for ($i=1; $i < $arrLength; $i++) { 
        if (abs($arr[$i]) < $minValue) {
            $minValue = abs($arr[$i]);
        }
    }

    return $minValue;
}

echo findMinimumNumber([10, -12, 34, 12, -3, 123]) . "\n";
