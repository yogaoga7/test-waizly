<?php

function plusMinus($arr) {
    // Inisialisasi hitungan untuk nilai positif, negatif, dan nol
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    // Cek dia nilai array positif atau negatif
    foreach ($arr as $num) {
        switch (true) {
            case $num > 0:
                $positiveCount++;
                break;
            case $num < 0:
                $negativeCount++;
                break;
            default:
                $zeroCount++;
        }
    }

    // Menghitung total elemen dalam array
    $total = count($arr);

    // Menghitung rasio nilai positif, negatif, dan nol terhadap total elemen
    $positiveRatio = $positiveCount / $total;
    $negativeRatio = $negativeCount / $total;
    $zeroRatio = $zeroCount / $total;

    // Mencetak rasio dengan format enam angka desimal setelah koma
    echo number_format($positiveRatio, 6) . "\n";
    echo number_format($negativeRatio, 6) . "\n";
    echo number_format($zeroRatio, 6) . "\n";
}

// Mengambil argumen dari baris perintah (eksklusif nama skrip)
$args = array_slice($argv, 1);

// Convert data ke integer 
$nums = [];
foreach ($args as $arg) {
    $subArgs = explode(",", $arg);

    foreach ($subArgs as $subArg) {
        if ($subArg !== "") {
            $nums[] = (int)$subArg;
        }
    }
}

plusMinus($nums);
?>