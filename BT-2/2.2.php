<table border="1 px">
    <tr>
        <?php
        for($i = 1; $i < 10; $i+=3) {
            echo "<td>";
            for($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j);
                echo "<br>";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>