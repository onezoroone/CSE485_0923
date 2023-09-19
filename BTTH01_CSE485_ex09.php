<?php
    $arrs = ['1','B', 'C', 'E', 'ABC'];

    for ($i = 0; $i < count($arrs); $i++) {
        $arrs[$i] = strtolower($arrs[$i]);
    }
    print_r($arrs);
    ?>
    
