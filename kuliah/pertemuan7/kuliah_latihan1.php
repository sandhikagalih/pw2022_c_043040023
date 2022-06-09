<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Sandhika";
// $_GET["email"] = "sandhika@gmail.com";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
  $nama = $_GET["nama"];
} else {
  $nama = 'Tidak Diketahui!';
}
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
  <li>
    <a href="kuliah_latihan1.php?nama=Doddy">Doddy</a>
  </li>
  <li>
    <a href="?nama=Sandhika">Sandhika</a>
  </li>
</ul>