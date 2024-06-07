<?php

// Reading words from the file
$myfile = fopen("paragraphs.txt", "r") or die("Unable to open file!");

$paragraphLength = 0;
$countWord = 0;

// counting words until end of file reached
while(!feof($myfile)) {
    $words[$paragraphLength++] = fgets($myfile);
}

if (gettype($words[0]) == "boolean" && count($words) == 1) {
    echo "No words provided in the file.\n";
}
else {
    for ($i=0; $i < $paragraphLength; $i++) {

        $tempWord = trim($words[$i]); // removing spaces from both side of the string

        for ($j=0; $j < strlen($tempWord); $j++) {
    
            // if a space is found, count a word
            if ($tempWord[$j] == " ") {
                $countWord++;
            }
        }
    
        $countWord++;   // for counting the last word
    }
    echo $countWord . "\n";
}
fclose($myfile);