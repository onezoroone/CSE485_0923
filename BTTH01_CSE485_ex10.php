<?php
    $arrs = ['1','b', 'c', 'e', 'abc'];

    for ($i = 0; $i < count($arrs); $i++) {
        $arrs[$i] = strtoupper($arrs[$i]);
    }
    print_r($arrs);
    ?>
    
