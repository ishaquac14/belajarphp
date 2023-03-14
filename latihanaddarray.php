<?php

// Ada dua cara yang bisa dilakukan untuk menambah isi array:
// Mengisi langsung ke nomer indeks yang ingin ditambahkan
// Mengisi langsung ke indeks terakhir

// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>