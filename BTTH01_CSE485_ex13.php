<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $average = array_sum($numbers) / count($numbers);
    $Average1 = [];
    foreach ($numbers as $number) {
        if ($number > $average) {
            $Average1[] = $number;
        }
    }
    $Average2 = [];
    foreach ($numbers as $number) {
        if ($number <= $average) {
            $Average2[] = $number;
        }
    }
    echo "Giá trị trung bình: $average<br>";
    echo "Các số lớn hơn giá trị trung bình: " . implode(', ', $Average1) . "<br>";
    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: " . implode(', ', $Average2);
    
