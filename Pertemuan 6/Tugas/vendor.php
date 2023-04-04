<?php
   require_once 'dbkonek.php';

   $sql = " SELECT * FROM vendor ";
   $stm = $conne->prepare($sql);
   $stm->execute();

   if(isset($_POST['submit'])){
    $no = $_POST['nomor'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO vendor (nomor, nama, kota,kontak ) VALUES (?, ?, ?, ?)";
    $stm = $conne->prepare($sql);
    $stm->execute([$no, $nama, $kota, $kontak]);

    header("Location: index.php");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <a href="from.php">Tambah Vendor</a>
    <hr>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kota</th>
      <th scope="col">Kontak</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php  
             $number=1;
             while($row= $stmt->fetch(PDO::FETCH_ASSOC)) :
          ?>
              <tr>
                <td><?= $number  ?></td>
                <td><?= $row['nomor']  ?></td>
                <td><?= $row['nama']  ?></td>
                <td><?= $row['kota']  ?></td>
                <td><?= $row['kontak']  ?>
                
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                    <a href="delete.php?id=<?= $row['id'] ?>"  
                        onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nama']?>?')) {return false}"
                    >
                        HAPUS
                    </a>
                </td>
              </tr>
           <?php 
              $number++;
              endwhile;
            ?>
  </tbody>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html>