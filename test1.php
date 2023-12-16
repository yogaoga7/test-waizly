<?php

function miniMaxSum($arr) {
    // jika array string maka masuk kondisi terlebih dahulu
    if (is_string($arr)) {
        $arr = array_map('intval', explode(' ', $arr));
    }

    // lalu sorting ascending
    sort($arr);
    
    // Mencari Nilai minimum 
    $minSum = array_sum(array_slice($arr, 0, 4));
    
    // Mencari nilai Maksimum
    $maxSum = array_sum(array_slice($arr, 1, 4));
    
    // Print the results
    echo $minSum . " " . $maxSum;
}

$args = array_slice($argv, 1);
miniMaxSum($args);

?>