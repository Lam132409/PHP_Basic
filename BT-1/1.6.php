<?php
// Số chia hết cho 2, 3 , 4, 5
//for ($i = 1; $i < 101; $i++) {
//    if ($i%2 == 0 && $i%3 == 0 && $i%4 == 0 && $i%5 == 5) {
//        echo $i ."". "<br>";
//    }
//
//}

for ($i = 1; $i <=100; $i++) {
    if ($i%2 == 0) {
        echo $i." là số chia hết cho 2"."<br>";
    }
    elseif ($i%3 == 0) {
        echo $i. " là số chia hết cho 3"."<br>";
    }
    elseif ($i%4 == 0) {
        echo  $i . " là số chia hết cho 4" . "<br>";
    }
    elseif ($i%5 == 0) {
        echo $i . " là số chia hết cho 5" . "<br>";
    }
}
