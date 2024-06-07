<?php
/**
 * This function takes an integer and
 * draw a pattern of stars(*) 
 * 
 * @param Integer
 */
function drawPyramid($n)
{
    $numberOfStars = 1;
    for ($i=0; $i < $n; $i++) { 
        $numberOfSpaces = $n - $i - 1;
        for ($j=0; $j < $numberOfSpaces; $j++) { 
            echo " ";
        }


        for ($k=0; $k < $numberOfStars; $k++) { 
            echo "*";
        }

        $numberOfStars += 2;
        echo "\n";
    }
}

drawPyramid(4);