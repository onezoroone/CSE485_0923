<?php 
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $minLength = PHP_INT_MAX;
    $maxLength = 0;
    $minString = '';
    $maxString = '';
    
    foreach ($array as $string) {
        $length = strlen($string);
        if ($length < $minLength) {
            $minLength = $length;
            $minString = $string;
        }
        if ($length > $maxLength) {
            $maxLength = $length;
            $maxString = $string;
        }
    }
    
    echo "Chuỗi lớn nhất là $minString, độ dài = $maxLength <br>";
    echo "Chuỗi nhỏ nhất là $maxString, độ dài = $minLength";
    