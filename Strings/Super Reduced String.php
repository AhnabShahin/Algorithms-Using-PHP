<?php

/*
 * Complete the 'superReducedString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function superReducedString($s) {
    // Write your code here
    $arrayOfString = str_split($s);
    $previousLetter = null;
    $previousIndex = null;
    $flag = true;

    while ($flag) {
        $flag = false;
        foreach ($arrayOfString as $index => $letter) {
            $currentLetter = $letter;
            $currentIndex = $index;
            if ($previousLetter == $currentLetter) {
                unset($arrayOfString[$currentIndex]);
                unset($arrayOfString[$previousIndex]);
                $previousLetter = null;
                $flag = true;
                continue;
            }
            $previousLetter = $currentLetter;
            $previousIndex = $currentIndex;
        }
    }
    return sizeof($arrayOfString) == 0 ? 'Empty String' : join($arrayOfString);

}

$result = superReducedString($s);


