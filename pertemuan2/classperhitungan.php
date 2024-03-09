<?php

class Perhitungan {
    
    // Method untuk menghitung luas permukaan kerucut
    public function luasKerucut($jari_jari, $tinggi) {
        $luas_permukaan = M_PI * $jari_jari * ($jari_jari + sqrt(pow($tinggi, 2) + pow($jari_jari, 2)));
        return $luas_permukaan;
    }

    // Method untuk menghitung luas permukaan kubus
    public function luasKubus($sisi) {
        $luas_permukaan = 6 * pow($sisi, 2);
        return $luas_permukaan;
    }

    // Method untuk menghitung luas permukaan balok
    public function luasBalok($panjang, $lebar, $tinggi) {
        $luas_permukaan = 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
        return $luas_permukaan;
    }
}

// Contoh penggunaan
$perhitungan = new Perhitungan();

// Menghitung luas permukaan kerucut dengan jari-jari 5 dan tinggi 10
echo "Luas Permukaan Kerucut: " . $perhitungan->luasKerucut(5, 10) . "<br>";

// Menghitung luas permukaan kubus dengan panjang sisi 4
echo "Luas Permukaan Kubus: " . $perhitungan->luasKubus(4) . "<br>";

// Menghitung luas permukaan balok dengan panjang 6, lebar 3, dan tinggi 2
echo "Luas Permukaan Balok: " . $perhitungan->luasBalok(6, 3, 2) . "<br>";

?>