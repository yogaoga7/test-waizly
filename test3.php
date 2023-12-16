<?php

function timeConversion($s) {
    // Mendapatkan jam, menit, dan detik dari string waktu
    sscanf($s, "%d:%d:%d%s", $h, $m, $s, $ampm);

    // Jika waktu adalah PM dan bukan jam 12, tambahkan 12 jam
    if ($ampm == 'PM' && $h != 12) {
        $h += 12;
    }

    // Jika waktu adalah AM dan jamnya 12, ubah jam menjadi 00
    if ($ampm == 'AM' && $h == 12) {
        $h = 0;
    }

    // Mengonversi jam, menit, dan detik ke format 24 jam
    $formattedTime = sprintf("%02d:%02d:%02d", $h, $m, $s);

    return $formattedTime;
}

// Mengambil waktu dari argumen baris perintah (eksklusif nama skrip)
if (isset($argv[1])) {
    $inputTime = $argv[1];
    $outputTime = timeConversion($inputTime);
    echo $outputTime . PHP_EOL;
} else {
    echo "Usage: php timeConversion.php <time>" . PHP_EOL;
}