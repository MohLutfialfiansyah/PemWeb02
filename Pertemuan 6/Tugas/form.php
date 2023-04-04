<?php
    require_once 'dbkonek.php';

    $sqljenis = "SELECT * FROM vendor";
    $rowjenis = $conne->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<a href="vendor.php">
        <h2>HOME</h2>
    </a>
	<form method="post" action="vendor.php">
		<label for="nomor">Nomor:</label>
		<input type="text" id="nomor" name="nomor"><br><br>
		
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		
		<label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota">
        <br>
        
        <label for="kontak">Kontak:</label>
		<input type="number" id="kontak" name="kontak"><br><br>

        <?php
            while($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $jenis['id'] ?>">         <?= $jenis['nama']  ?>          </option>
        <?php
            }
        ?>
        </select>

        <br><br>
		
		<input type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>