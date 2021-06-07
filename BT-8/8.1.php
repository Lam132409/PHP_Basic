<?php
function tinhGiaiThua($n) {
    $result = 1;
    if ($n == 0 || $n == 1) {
        return $result;
    }
    else {
        for($i = 2; $i <= $n; $i ++) {
        $result *= $i;
        }
    return $result;
    }
}
echo tinhGiaiThua(4) ;