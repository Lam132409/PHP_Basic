<?php
function tamGiac() {
    for ($i=1; $i<=5; $i++){
        for($j = 0; $j < $i; $j++){
            echo  "*";
        }
        echo "</br>";
    }
}

function tamGiacNguoc(){
    for ($i=5; $i>=1; $i--){
        for ($j = 0; $j < $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
}
tamGiac() . "<br>" . tamGiacNguoc();