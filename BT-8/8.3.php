<?php
function sapXepTangDan(array $arr)
{
    $b = 1;
    while ($b === 1) {
        $b = 0;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $t = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $t;
                $b = 1;
            }
        }
    }
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
    }
}function sapXepGiamDan(array $arr)
{
    $b = 1;
    while ($b === 1) {
        $b = 0;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] < $arr[$i + 1]) {
                $t = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $t;
                $b = 1;
            }
        }
    }
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
    }
}
sapXepTangDan([5,9,6,8,7,1,2,3,4,5]) . "<br>";
sapXepGiamDan([5,9,6,8,7,1,2,3,4,5]);
