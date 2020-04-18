<?php
//array multidimensi/array dalam array/array bersarang
$mahasiswa =[
    ["widhi pranata saputra ","19.52.0008","sistem informasi ","widhipranata35@gmail.com"],
    ["pranata","18.52.0008","sistem informasi","nata@gmail.com"],
    ["putra","17.52.0008","teknologi informasi 2","putra123@gmail.com"]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
  <ul>
    <?php foreach($mhs as $m): ?>
        <li> <?php echo $m; ?></li>
    <?php endforeach; ?>
  </ul>
    <?php endforeach; ?>
</body>
</html>