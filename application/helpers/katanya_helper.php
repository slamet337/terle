<?php
if (!function_exists('kataKeAngka')) {
    function kataKeAngka($kata) {
        $mapKataKeAngka = [
            'nol' => 0,
            'satu' => 1,
            'dua' => 2,
            'tiga' => 3,
            'empat' => 4,
            'lima' => 5,
            'enam' => 6,
            'tujuh' => 7,
            'delapan' => 8,
            'sembilan' => 9,
            'sepuluh' => 10,
            'seribu' => 1000,
            // Tambahkan kata dan nilai yang lebih kompleks sesuai kebutuhan
        ];

        $kata = strtolower(trim($kata));
        return isset($mapKataKeAngka[$kata]) ? $mapKataKeAngka[$kata] : 0;
    }
}