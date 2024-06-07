<?php

/**
 * This function takes a string and reverse only the characters of every word,
 * keeping the postion of the word at the same place.
 * 
 * @param String
 * @return String
 */
function reverseLettersInWord($sentence)
{
    $sentenceLength = strlen($sentence);
    $finalSentence = '';
    $alreadyReversed = 0;
    $tempWord = '';

    for($i=0; $i<$sentenceLength; $i++) {

        if ($sentence[$i] == ' ' || $sentence[$i] == ',' || $sentence[$i] == '.' || $i == $sentenceLength-1) {

            if (!$alreadyReversed) {

                // for last character of the sentence
                if ($i == $sentenceLength-1 && $sentence[$i] != ' ' && $sentence[$i] != ',' && $sentence[$i] != '.') {
                    $finalSentence .= $sentence[$i];

                    $tempWordLength = strlen($tempWord);
                    for ($j=$tempWordLength-1; $j >= 0 ; $j--) { 
                        $finalSentence .= $tempWord[$j];
                    }
                }
                else {
                    $tempWordLength = strlen($tempWord);

                    for ($j=$tempWordLength-1; $j >= 0 ; $j--) { 
                        $finalSentence .= $tempWord[$j];
                    }
                    $finalSentence .= $sentence[$i];
                    $alreadyReversed = 1;
                    $tempWord = '';
                }
            }
            else {
                $finalSentence .= $sentence[$i];
            }
        }
        else {
            $tempWord .= $sentence[$i];
            $alreadyReversed = 0;
        }
    }

    return $finalSentence;
}

echo reverseLettersInWord("My name, is Sakib.") . "\n";
// echo reverseLettersInWord("My name is Sakib") . "\n";
// echo reverseLettersInWord("I love programming") . "\n";
// echo reverseLettersInWord("") . "\n";