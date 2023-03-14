<?php
/*Array adalah salah satu struktur data yang berisi sekumpulan data dan memiliki indeks. 
Indeks digunakan untuk mengakses nilai array.
Indeks array selalu dimulai dari nol (0).*/

// array dapat kita isi dengan tipe data apa saja. Bahkan dicampur juga boleh.
// Contoh : $item = ["Bunga", 123, 39.12, true];

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

echo $makanan [0]. "<br>";
echo $makanan [1]. "<br>";
echo $makanan [2]. "<br>";


?>