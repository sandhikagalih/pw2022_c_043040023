<?php 
// Array Associative
// Array yang indexnya string

$mahasiswa = [
  [
    "nama" => "Sandhika Galih", 
    "npm" => "043040023", 
    "email" => "sandhikagalih@gmail.com", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Doddy Ferdiansyah", 
    "npm" => "133040123", 
    "email" => "doddy@gmail.com", 
    "jurusan" => "Teknik Mesin"
  ],
  [
    "nama" => "Anggoro Ari", 
    "email" => "anggoro@gmail.com", 
    "jurusan" => "Teknik Industri", 
    "npm" => "133040123"
  ]
];

// var_dump($mahasiswa[1]["nilai_tugas"]["tugas2"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
  <li>Nama: <?php echo $mhs["nama"]; ?></li>
  <li>NPM: <?php echo $mhs["npm"]; ?></li>
  <li>Email: <?php echo $mhs["email"]; ?></li>
  <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
  <?php foreach($mhs as $key => $value) { ?>
    <li><?php echo $key; ?>: <?php echo $value; ?></li>
  <?php } ?>
</ul>
<?php } ?>