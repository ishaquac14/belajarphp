<?php
    // membuat array
    // $barang = array("Buku", "Penghapus", "Spidol");

    // menampilkan isi array dengan perulangan for
    // for ($i=0; $i < 3; $i++) {
    //     echo $barang[$i]."<br>";
    // }

    // membuat array 2
    $barang = ["Buku Tulis", "Penghapus", "Spidol"];

    // menampilkan isi array dengan perulangan for
    for($i=0; $i < count($barang); $i++){
        echo $barang[$i]."<br>";
    }
?>