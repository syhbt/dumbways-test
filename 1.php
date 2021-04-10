​<?php

function HitungVoucher($voucher, $total)
{
    $diskon = $total * (21.1 / 100);
    $diskon2 = $total * (30 / 100);
    $maks_diskon2 = 40000;
    $maks_diskon = 20000;

    if ($voucher == "DumbwaysJos") {

        if ($diskon >= $maks_diskon) {
                $total = $total - $maks_diskon; 
                echo "Uang yang harus dibayar : ".$total."<br>";
                echo "Diskon : {$maks_diskon}<br>";
                $kembalian = $total + $maks_diskon - $total;
                echo "Kembalian : {$kembalian}";
        }
        elseif ($total >= 50000) {
                $total = $total - $diskon;
                echo "Uang yang harus dibayar : ".$total."<br>";
                echo "Diskon : {$diskon}<br>";
                echo "Kembalian : {$diskon}";
        }
        elseif ($total < 50000) {
                $total = $total;
                echo "Uang yang harus dibayar : ".$total."<br>";
                echo "Diskon : 0<br>";
                echo "Kembalian : 0";
        }
    }
    elseif ($voucher == "DumbwaysMantap") {

        if ($diskon2 >= $maks_diskon2) {
                $total = $total - $maks_diskon2; 
                echo "Uang yang harus dibayar : ".$total."<br>";
                echo "Diskon : $maks_diskon2<br>";
                $kembalian = $total + $maks_diskon2 - $total;
                echo "Kembalian : {$kembalian}";
        }
        elseif ($total >= 80000) {
                $total = $total - $diskon2;
                echo "Uang yang harus dibayar : ".$total."<br>";
                echo "Diskon : $diskon2<br>";
                echo "Kembalian : $diskon2";
        }
        elseif ($total < 80000) {
                $total = $total;
                echo "Uang yang harus dibayar : ".$total."<br>";
                echo "Diskon : 0<br>";
                echo "Kembalian : 0";
        }
    }
    else {
        echo "Kode Voucher tidak ditemukan.";
    }
}
HitungVoucher("DumbwaysJos", 100000)
?>