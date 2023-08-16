<?php
include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>

    <div class="container col-md-6">
        <div class="card">
            <div class="card header bg-dark text-white">
                <center>Input Data</center>
            </div>

            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control col-md-9" placeholder="Masukkan ID">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control col-md-9" placeholder="Masukkan No Telepon">
                    </div>

                    <div class="form-group">
                        <label for="jam_operasional">Jam Operasional</label>
                        <input type="text" name="jam_operasional" class="form-control col-md-9" placeholder="Masukkan Jam Operasional">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control col-md-9" placeholder="Masukkan Keterangan">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger" name="reset">BATAL</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['simpan'])) {
    $id                     = $_POST['id'];
    $nama                   = $_POST['nama'];
    $alamat                 = $_POST['alamat'];
    $no_telepon             = $_POST['no_telepon'];
    $jam_operasional        = $_POST['jam_operasional'];
    $keterangan             = $_POST['keterangan'];
    mysqli_query($koneksi, "INSERT INTO tambal VALUES(
            '$id','$nama','$alamat','$no_telepon','$jam_operasional','$keterangan'
        )") or die(mysqli_error($koneksi));

    echo "<div align='center'><h5> Tolong Hadangi Lagi Meinput Lah...... </h5></div>";
    echo "<meta http-equiv='refresh' content='2;url=http://localhost/latihancrud/index.php'>";
}

?>