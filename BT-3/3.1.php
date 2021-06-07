<?php
$money = 0;
if(isset($_GET['money'])) {
    $money = filter_var($_GET['money'], FILTER_SANITIZE_NUMBER_INT); }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="content">
<!--    --><?php
//    $money = 0;
//    if(isset($_GET['money'])) {
//        $money = filter_var($_GET['money'], FILTER_SANITIZE_NUMBER_INT); }
//    ?>
    <div class="info">

        <h1>Mô phỏng máy ATM</h1>
        <form action="#" method="get">
            <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
            <input type="text" name="money" value="<?php echo number_format($money); ?>">
            <input type="submit" value="Rút tiền">
        </form>
    </div>
    <table>
    <div class="clr"></div>
    <div class="result">
        <div class="normal">
            <p class="col1">Mệnh giá</p>
            <p class="col2">Số lượng</p>
            <p class="col3">Thành tiền</p>
        </div>
        <div class="clr"></div>
        <?php
        define("ONE_0", 10000);
        define("TWO_0", 20000);
        define("FIVE_0", 50000);
        define("ONE_00", 100000);
        define("TWO_00", 200000);
        define("FIVE_00", 500000);

        $five00 = 0;
        $two00 = 0;
        $one00 = 0;
        $five0 = 0;
        $two0 = 0;
        $one0 = 0;

        $flagShow = false;
        if($money >= 10000) {
            $flagShow = true;
            while ($money >= FIVE_00) { $five00++; $money = $money - FIVE_00; }
            while ($money >= TWO_00) { $two00++; $money = $money - TWO_00; }
            while ($money >= ONE_00) { $one00++; $money = $money - ONE_00; }
            while ($money >= FIVE_0) { $five0++; $money = $money - FIVE_0; }
            while ($money >= TWO_0) { $two0++; $money = $money - TWO_0; }
            while ($money >= ONE_0) { $one0++; $money = $money - ONE_0; }

            $total = FIVE_00*$five00 + TWO_00*$two00 + ONE_00*$one00 + FIVE_0*$five0;
        }
        ?>
        <?php
        if($money%10000!=0) {
            echo 'ATM không đủ tiền';
        }
        else {
            if($five00 > 0) {
                echo "Mệnh Giá ". number_format(FIVE_00) ;
                echo "Số Lượng " . $five00 ;
                echo "Thành Tiền " . number_format($five00 * FIVE_00) . "<br>";
            }
            if($two00 > 0) {
                echo "Mệnh Giá ". number_format(TWO_00) ;
                echo "Số Lượng " . $two00 ;
                echo "Thành Tiền " . number_format($two00 * TWO_00) . "<br>";
            }
            if($one00 > 0) {
                echo "Mệnh Giá ". number_format(ONE_00) ;
                echo "Số Lượng " . $one00 ;
                echo "Thành Tiền " . number_format($one00 * ONE_00) . "<br>";
            }
            if($five0 > 0) {
                echo "Mệnh Giá ". number_format(FIVE_0) ;
                echo "Số Lượng " . $five0 ;
                echo "Thành Tiền " . number_format($five0 * FIVE_0) . "<br>";
            }
            if($two0 > 0) {
                echo "Mệnh Giá ". number_format(TWO_0) ;
                echo "Số Lượng " . $two0 ;
                echo "Thành Tiền " . number_format($two0 * TWO_0) . "<br>";
            }
            if($one0 > 0) {
                echo "Mệnh Giá ". number_format(ONE_0) ;
                echo "Số Lượng " . $one0 ;
                echo "Thành Tiền " . number_format($one0 * ONE_0) . "<br>";
            }

        }

        ?>
    </div><!-- .result -->
</div>
</body>

</html>
