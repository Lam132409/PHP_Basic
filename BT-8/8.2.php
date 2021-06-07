<?php
function daoNguoc($str){
    for ($i = 0, $j = strlen($str)-1; $i < (strlen($str) / 2); $i++, $j--) {
        $t = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $t;
    }
    echo $str;
}
daoNguoc('saoemvotinh');