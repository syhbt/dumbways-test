<?php

function HitungVoucher($voucher, $total)
{
    $diskon = $total * (21.1 / 100);
    $maks_diskon = 20000;

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
HitungVoucher("DumbwaysJos", 95000)
?>