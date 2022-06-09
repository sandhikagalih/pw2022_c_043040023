<?php 
// ARRAY Multidimensi
// Array di dalam array

$mahasiswa = [
  ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"], 
  ["Doddy Ferdiansyah", "103040001", [1,[2],3], "doddy@gmail.com", "Teknik Mesin"]
];
echo $mahasiswa[1][2][1][0]; // 2



?>