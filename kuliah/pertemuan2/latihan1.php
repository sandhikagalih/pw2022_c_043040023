<?php 
// KOMENTAR
// ini untuk menuliskan catatan

// VARIABEL
// tempat penyimpanan nilai
// Nilai: angka (integer), tulisan (string), boolean (true / false)
// Nama bebas, tidak boleh ada spasi
// boleh ada angka tapi di awal
$nama1 = "Sandhika";
echo $nama1;
echo "<hr>";

// OPERATOR
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo (1 + 2) * 3 - 4; // kukabataku
echo "<br>";
echo 10 % 5;
echo "<hr>";

// Perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 2; // true / 1
echo "<br>";
echo 10 < 5; // false / null
echo "<br>";
echo 10 == "10"; // true
echo "<hr>";

// Identitas
// ===, !==
// Mengecek nilai beserta tipe data nya
echo 10 === "10";
echo "<hr>";

// Increment / Decrement
// Penambahan / Pengurangan 1
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo ++$x;
echo "<hr>";
// Concat, Penggabung String
// .
$nama_depan = "Sandhika";
$nama_belakang = 'Galih';
echo $nama_depan . " " . $nama_belakang;


?>
