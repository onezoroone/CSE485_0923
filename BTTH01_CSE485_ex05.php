<?php
    $a = ['a' => ['b' => 0,'c' => 1],
    'b' => ['e' => 2,'o' => ['b' => 3]]];
    
    $value3 = $a['b']['o']['b'];
    echo $value3;
    $value4 = $a['a']['c'];
    echo '<br>'.$value4.'<br>';
    foreach ($a as $key =>$value) {
        foreach ($value as $key2 => $value2) {
            if($key == 'a')
            {
                echo ''.$value2. ' ';
            }
        }
    }
