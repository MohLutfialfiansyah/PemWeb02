<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga_jual = $_POST['harga_jual'];
   $_harga_beli = $_POST['harga_beli'];
   $_stok= $_POST['stok'];
   $_min_stok = $_POST['min_stok'];
   $_deskripsi = $_POST['deskripsi'];
   $_jenis_produk_id= $_POST['jenis_produk_id'];
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_kode; // ? 2
   $ar_data[]=$_nama;// 3
   $ar_data[]=$_harga_jual;
   $ar_data[]=$_harga_beli;
   $ar_data[]=$_stok * $_harga_jual;
   $ar_data[]=$_min_stok;
   $ar_data[]=$_deskripsi;
   $ar_data[]=$_jenis_produk_id; // ? 7
  // ? 7
    // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (id,kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,jenis_produk_id
    ) VALUES (?,?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE produk SET id=?,kode=?, nama=?,harga_jual=?,
    harga_beli=?,stok=?,min_stok=?,deskripsi=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:dashboard.php');
?>