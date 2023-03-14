<?php
$txt1 = "Tutorial PHP";
$txt2 = "petanikode.com";
$x = 5;
$y = 4;

echo "<h2>". $txt1 ."</h2>";
echo "Aku belajar pemrograman PHP di " . $txt2 . "<br>";
echo $x + $y;

// Biasanya saat kita menggunakan fungsi echo, kita akan menulis seperti ini:
$txt = "petanikode.com";
echo "Aku belajar pemrograman PHP di " . $txt . "<br>";

// Apabila kita ingin menggunakan fungsi printf(), maka kita bisa lakukan seperti ini:
$txt = "petanikode.com";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);

// Simbol %s adalah sebuah placeholder untuk teks (string). Selain simbol %s ada juga simbol:
// %d untuk bilangan desimal (integer);
// %f untuk pecahan (float);
// %b untuk boolean.
// Salah satu yang patut kita coba adalah %f, karena dengan ini kita bisa mengatur bagaimana bilangan pecahan ditampilkan.

// Contoh:
// misalkan kita punya bilangan dengan notasi E seperti ini
$harga = 100000;

// jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga <br>";
// jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f", $harga);
?>