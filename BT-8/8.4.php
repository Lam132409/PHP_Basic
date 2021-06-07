<?php
function check_lowercase_string($str) {
    $chars = '';
    for($alpha = 'a'; $alpha != 'aa'; $alpha++) { $small[] = $alpha; }
    $l = 0;
    while (@$str[$l] != '') {
        $l++;
    }
    for($i = 0; $i < $l; $i++) {
        foreach($small as $letter) {
            if($str[$i] == $letter) {
                $chars .= $letter;
            }
        }
    }

    return ($chars === $str);
}

echo $result = (check_lowercase_string("alllowercaselette12r")) ? "Chuỗi toàn kí tự thường" : "Chuỗi không toàn kí tự thường";

