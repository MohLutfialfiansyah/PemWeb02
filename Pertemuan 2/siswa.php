
  <?php
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matakuliah'];
        $nilai_uts = $_POST['uts'];
        $nilai_uas = $_POST['uas'];
        $nilai_tugas = $_POST['tugas'];
        $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                if ($total_nilai == "") {
                        echo "";
                    } elseif ($total_nilai >= 0 && $total_nilai <= 49) {
                        echo "<h1>Nilai Mhasiswa <br> Grade : E <br> Predikat : Buruk</h1> " ;
                    } elseif ($total_nilai >= 50 && $total_nilai <= 59) {
                        echo "<h1>Nilai Mahasiswa <br>Grade : D <br> Predikat : Kurang Baik</h1>" ;
                    } elseif ($total_nilai >= 60 && $total_nilai <= 69) {
                        echo  "<h1>Nilai Mahasiswa <br> Grade : C <br> Predikat : Baik</h1>";
                    } elseif ($total_nilai >= 70 && $total_nilai <= 79) {
                        echo "<h1>Nilai Mahasiswa <br> Grade : B <br> Predikat : Sangat baik</h1>";
                    } elseif ($total_nilai >= 80 && $total_nilai <= 100) {
                        echo "<h1>Nilai Mahasiswa <br>Grade : A <br> Predikat : Istimewaa</h1>";
                    } elseif ($total_nilai >100 && $total_nilai < 0){
                        echo "I";
                    }

                    else{
                        echo  $total_nilai . ' Masukkan Nilai dengan Benar!';
                    }
               
        ?>







