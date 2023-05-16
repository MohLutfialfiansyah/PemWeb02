<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="icon" href="assets/img/2.1.png" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body>
<?php 
require_once 'dbkoneksi.php';
?>
<?php

    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['idpesanan']?></td></tr>
        <tr>  <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>   <td>Nama </td><td><?=$row['nama_pemesan']?></td></tr>
        <tr>   <td>alamat</td><td><?=$row['alamat_pemesan']?></td></tr>
        <tr>   <td>No Hp</td><td><?=$row['no_hp']?></td></tr>
        <tr>   <td>email</td><td><?=$row['email']?></td></tr>
        <tr>   <td>jumlah pesanan</td><td><?=$row['jumlah_pesanan']?></td></tr>
        <tr>   <td>deskripsi</td><td><?=$row['deskripsi']?></td></tr>
        <tr>   <td>idproduk</td><td><?=$row['idproduk']?></td></tr>
    </tbody>
</table>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
