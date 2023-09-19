<?php
    $arrs=[2,5,6,9,2,5,6,12,5];
    $sum = 0;
    $tich = 1;
    $hieu =0   ;
    $thuong = 1;
    echo'Tổng các phần tử: ';
    for($i=0; $i < count($arrs); $i++){
        $sum = $sum + $arrs[$i];
        echo $arrs[$i];
    if ($i < count($arrs) - 1) {
        echo ' + ';
    }
    }
    echo  ' = ' .$sum. '<br />';
    echo'Tích các phần tử: ';
    for($i=0; $i < count($arrs); $i++){
        $tich = $tich * $arrs[$i];
        echo $arrs[$i];
    if ($i < count($arrs) - 1) {
        echo ' * ';
    }
    }
    echo  ' = ' .$tich. '<br />';
    echo'Hiệu các phần tử: ';
    for($i=0; $i < count($arrs); $i++){
        $hieu = $hieu - $arrs[$i];
        echo $arrs[$i];
    if ($i < count($arrs) - 1) {
        echo ' - ';
    }
    }
    echo '= '.$hieu. '<br />';
    echo'Thương các phần tử: ';
    for($i=0; $i < count($arrs); $i++){
        $thuong = $thuong / $arrs[$i];
        echo $arrs[$i];
    if ($i < count($arrs) - 1) {
        echo ' / ';
    }
    }
    echo  ' = ' .$thuong. '';

