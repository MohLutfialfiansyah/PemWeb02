<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_idpesanan = $_POST['idpesanan'];
   $_tanggal = $_POST['tanggal'];
   $_nama_pemesan = $_POST['nama_pemesan'];
   $_alamat_pemesan = $_POST['alamat_pemesan'];
   $_no_hp = $_POST['no_hp'];
   $_email= $_POST['email'];
   $_jumlah_pesanan = $_POST['jumlah_pesanan'];
   $_deskripsi= $_POST['deskripsi'];
   $_idproduk= $_POST['idproduk'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_idpesanan; // ? 1
   $ar_data[]=$_tanggal; // ? 2
   $ar_data[]=$_nama_pemesan;// 3
   $ar_data[]=$_alamat_pemesan;
   $ar_data[]=$_no_hp;
   $ar_data[]=$_email;
   $ar_data[]=$_jumlah_pesanan;
   $ar_data[]=$_deskripsi; // ? 7
   $ar_data[]=$_idproduk; // ? 7
    // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (idpesanan,tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,idproduk
    ) VALUES (?,?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pesanan SET idpesanan=?,tanggal=?, nama_pemesan=?,alamat_pemesan=?,
    no_hp=?,email=?,jumlah_pesanan=?,deskripsi=?,idproduk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:dashboard.php');
?>