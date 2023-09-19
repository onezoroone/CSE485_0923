<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
        ];
    $begin = reset($numbers);
    $lastElement = end($numbers);
    $minValue = min($numbers);
    $maxValue = max($numbers);
    $sum = array_sum($numbers);
    echo 'Phần tử đầu tiên là: '.$begin.'<br>';
    echo 'Phần tử cuối cùng là: '.$lastElement.'<br>';
    echo 'Số nhỏ nhất là: '.$minValue.'<br>';
    echo 'Số lớn nhất là: '.$maxValue.'<br>';
    echo 'Tổng: '.$sum.'<br>';
    echo 'Tăng dần theo value:';
    asort($numbers);
    foreach( $numbers as $n) {
        echo "$n ";
    }
    echo '<br> Giảm dần theo value:';
    arsort($numbers);
    foreach( $numbers as $n) {
        echo "$n ";
    }
    echo '<br> Tăng dần theo key:';
    ksort($numbers);
    var_dump($numbers);
    echo '<br> Giảm dần theo key:';
    krsort($numbers);
    var_dump($numbers);
    