<?php 
    session_start();
    include 'koneksi.php';


    // Gunakan $_GET['id'] untuk mencari berdasarkan id_pendaftaran
    $id_pendaftaran = mysqli_real_escape_string($conn, $_GET['id']);
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '$id_pendaftaran'");

    // Periksa apakah ada hasil dari kueri
    if ($peserta && mysqli_num_rows($peserta) > 0) {
        $p = mysqli_fetch_object($peserta);
    } else {
        // Tidak ada hasil ditemukan, mungkin berikan pesan atau redirect ke halaman lain
        echo '<script>alert("Data peserta tidak ditemukan"); window.location="data-peserta.php";</script>';
        exit(); // Hentikan eksekusi script agar tidak melanjutkan ke bagian selanjutnya
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Pendaftaran</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        /* Tambahkan style tambahan jika diperlukan */
    </style>
</head>
<body>

    <!-- Bagian Content -->
    <section class="content">
        <h2>Bukti Pendaftaran</h2>
        <div class="box">
            <table class="table-form" border="0">
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <td><?php echo $p->id_pendaftaran; ?></td>
                </tr>

                <!-- Menampilkan data dalam elemen HTML -->
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $p->nm_peserta; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $p->tmp_lahir; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $p->tgl_lahir; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $p->jk; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $p->agama; ?></td>
                </tr>
                <tr>
                    <td>Alamat Peserta</td>
                    <td>:</td>
                    <td><?php echo $p->almt_peserta; ?></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><?php echo $p->kelas; ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td><?php echo $p->th_ajaran; ?></td>
                </tr>
                <!-- Tambahkan baris-tr lainnya sesuai kebutuhan -->
                <!-- ... -->
            </table>
        </div>
        <button onclick="cetakHalaman()">Cetak Halaman</button>
    <script>
        function cetakHalaman() {
            window.print(); // Memicu dialog pencetakan browser
        }
    </script>
    </section>

    
    <!-- Tambahkan script JavaScript atau style tambahan jika diperlukan -->

</body>
</html>
