<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];

    $sql = "DELETE FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    
?>


<?php
   header('location:list_pelanggan.php' );
?>
