<?php

/**
 * This function takes an integer and
 * return the sum of digits of the integer
 * 
 * @param Integer
 * @return Integer
 */
function sumOfDigits($number)
{
    $sum = 0;

    if ($number < 0) {
        $number = abs($number);
    }

    while ($number != 0) {
        $sum += ($number%10);
        $number /= 10;
    }

    return $sum;
}

echo sumOfDigits(1234) . "\n";