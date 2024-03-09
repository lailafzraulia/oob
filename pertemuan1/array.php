<?php
// array 1 dimensi 
$array1 = array();
$array2 = [];

$makanan = ['nasi gorengkambing', 'sate kambing', 'sate goreng kambing', 'sate buntel kambing', 'es jeruk'];

// menghitung jumlah array
// echo $makanan[0];

//looping untuk menampilkan array
// $i = 0;
//whilr ($i < count($makanan)) {
//      echo $makanan[$i]."<br>";
//      $i++;
// }

foreach ($makanan as $row) {
    echo $row."<br>";
}

?>

