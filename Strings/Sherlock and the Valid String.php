<?php
function isValid($s)
{
    $strToArr = str_split($s);
    $vals = array_count_values($strToArr);
    $max = max($vals);
    $min = min($vals);
    if ($max == $min) {
        return 'YES';
    } else if ($max - 1 == $min || $min == 1) {
        $targetItem = array_search($max, $vals);
        foreach ($strToArr as $index => $value) {
            if ($value == $targetItem) {
                unset($strToArr[$index]);
                break;
            }
        }
        if (max(array_count_values($strToArr)) == min(array_count_values($strToArr))) {
            return 'YES';
        } else {
            array_push($strToArr, $targetItem);
            $targetItem = array_search($min, $vals);
            foreach ($strToArr as $index => $value) {
                if ($value == $targetItem) {
                    unset($strToArr[$index]);
                    break;
                }
            }
            if (max(array_count_values($strToArr)) == min(array_count_values($strToArr))) {
                return 'YES';
            } else {
                return 'NO';
            }
        }
        return $targetItem;
    } else {
        return 'NO';
    }
}


$result = isValid('ibfdgaeadiaefgbhbdghhhbgdfgeiccbiehhfcggchgghadhdhagfbahhddgghbdehidbibaeaagaeeigffcebfbaieggabcfbiiedcabfihchdfabifahcbhagccbdfifhghcadfiadeeaheeddddiecaicbgigccageicehfdhdgafaddhffadigfhhcaedcedecafeacbdacgfgfeeibgaiffdehigebhhehiaahfidibccdcdagifgaihacihadecgifihbebffebdfbchbgigeccahgihbcbcaggebaaafgfedbfgagfediddghdgbgehhhifhgcedechahidcbchebheihaadbbbiaiccededchdagfhccfdefigfibifabeiaccghcegfbcghaefifbachebaacbhbfgfddeceababbacgffbagidebeadfihaefefegbghgddbbgddeehgfbhafbccidebgehifafgbghafacgfdccgifdcbbbidfifhdaibgigebigaedeaaiadegfefbhacgddhchgcbgcaeaieiegiffchbgbebgbehbbfcebciiagacaiechdigbgbghefcahgbhfibhedaeeiffebdiabcifgccdefabccdghehfibfiifdaicfedagahhdcbhbicdgibgcedieihcichadgchgbdcdagaihebbabhibcihicadgadfcihdheefbhffiageddhgahaidfdhhdbgciiaciegchiiebfbcbhaeagccfhbfhaddagnfieihghfbaggiffbbfbecgaiiidccdceadbbdfgigibgcgchafccdchgifdeieicbaididhfcfdedbhaadedfageigfdehgcdaecaebebebfcieaecfagfdieaefdiedbcadchabhebgehiidfcgahcdhcdhgchhiiheffiifeegcfdgbdeffhgeghdfhbfbifgidcafbfcd');

