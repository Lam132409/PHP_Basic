<?php
$count = 0;
function count_1($a, $b, $c, $d){
    $count = $a + $b + $c + $d;
    return $count;
}
function count_2($a, $b, $c, $d){
    $count = $a - $b - $c - $d;
    return $count;
}
echo "Tổng ".count_1(1, 2, 3, 4) . "<br>";
echo "Hiệu ". count_2(4, 3, 2, 1);
