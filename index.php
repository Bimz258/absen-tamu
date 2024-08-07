<?php 
    include 'koneksi.php';

    if(isset($_POST['submit'])){

      // ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
      $getMaxid = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");

        $d = mysqli_fetch_object($getMaxid);
        $generateid = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        

        // Proses Insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
            '".$generateid."',
            '".date( 'y-m-d' )."',
            '".$_POST["Th_ajaran"]."',
            '".$_POST["Kelas"]."',
            '".$_POST["nm"]."',
            '".$_POST["tmp_lahir"]."',
            '".$_POST["tgl_lahir"]."',
            '".$_POST["jk"]."',
            '".$_POST["Agama"]."',
            '".$_POST["almt_peserta"]."'
        )");
        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generateid.'"</script>';
        }else{
            echo 'gagal'.mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online RA Alkhoeriyah</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- bagian box formulir -->
    <section class="box-formulir">

    <h2>Formulir Pendaftaran Siswa RA Alkhoeriyah</h2>

    <!-- Bagian Form -->
    <form action="" method="post">

    <div class="box">
        <table border="0" class="table-form">
            <tr>
                <td>Tahun Ajaran</td>
                <td>:</td>
                <td>
                    <input type="text" name="th_ajaran" class="input-control">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                  <select class="input-control" name="Kelas">
                    <option value="">--pilih--</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                  </select>
                </td>
            </tr>
        </table>
    </div>

    <h3>Data Diri Calon Siswa</h3>
    
    <div class="box">
        <table border="0" class="table-form">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="nm" class="input-control">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="tmp_lahir" class="input-control">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_lahir" class="input-control">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                 <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                 <input type="radio" name="jk" value="Perempuan" required> Perempuan<br>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                  <select class="input-control" name="Agama">
                    <option value="">--pilih--</option>
                    <option value="islam">islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Kristen">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Khonghucu">Khonghucu</option>
                  </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td>:</td>
                <td>
                    <textarea class="input-control" name="almt_peserta"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                   <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                </td>
            </tr>
        </table>
    </div>
 
    </form>

    </section>


</body>
</html>