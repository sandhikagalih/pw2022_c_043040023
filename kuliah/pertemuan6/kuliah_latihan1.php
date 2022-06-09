<?php 
// Array Numerik
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
  ["Sandhika Galih", "043040023", "sandhikagalih@gmail.com", "Teknik Informatika"],
  ["Doddy Ferdiansyah", "133040123", "doddy@gmail.com", "Teknik Mesin"],
  ["Anggoro Ari", "anggoro@gmail.com", "Teknik Industri", "133040123"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul><?php  ?>
  <li>Nama: <?php echo $mhs[0]; ?></li>
  <li>NPM: <?php echo $mhs[1]; ?></li>
  <li>Email: <?php echo $mhs[2]; ?></li>
  <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>



