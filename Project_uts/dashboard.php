<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan</title>
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
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pesanan.php" role="button">Pesan</a>
      <a class="btn btn-success" href="list_produk.php" role="button">Produk</a>
      <br>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                  <th>No</th>
                    <th>id_pesanan</th>
                    <th>tanggal</th>
                    <th>Nama</th>
                    <th>alamat</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripsi </th>
                    <th>idProduk </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['idpesanan']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['nama_pemesan']?></td>
                        <td><?=$row['alamat_pemesan']?></td>
                        <td><?=$row['no_hp']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['jumlah_pesanan']?></td>
                        <td><?=$row['deskripsi']?></td>
                        <td><?=$row['idproduk']?></td>
                        
                        <td>
                        <a class="btn btn-primary" href="view.php>">View</a>
                        <a class="btn btn-primary" href="form_pesanan.php">Edit</a>
                        <a class="btn btn-primary" href="delete.php>"
                        onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan?')) {return false}"
                        >Delete</a>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
