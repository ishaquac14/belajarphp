<?php
// Float adalah tipe data bilangan pecahan. Sama seperti integer, tipe data ini ditulis tanpa tanda petik.
// Contoh:
// $panjang = 233.12;
// $kapasistas = 13232.12;

// Kada juga tipe data float ditulis dalam notasi seperti ini:
// $jarak = 1.2E-5;

// E-5 artinya eksponen dari 10.
// Contoh di atas akan sama dengan 1.2 x 10-5. Kalau kita jabarkan akan menjadi 0.000012.
// Agar format float tidak tercetak dalam notasi E, kita bisa gunakan fungsi sprintf().

// Contoh:
$a = 1.2E-5;
echo sprintf('%f', $a);
// batasi angka di belakang koma
echo "<br>";
echo sprintf('%.8f', $a);
?>