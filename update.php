<?php
include_once('connection.php');
?>

<?php
$id = $_GET['id'];
$ambildata = mysqli_query($koneksi, "SELECT * FROM tambal WHERE id='$id'");
$data = mysqli_fetch_array($ambildata);
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
                <center>Edit Data</center>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control col-md-9" placeholder="Masukkan ID">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control col-md-9" placeholder="Masukkan alamat">
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">No Telepon</label>
                        <input type="text" name="no_telepon" value="<?php echo $data['no_telepon'] ?>" class="form-control col-md-9" placeholder="Masukkan no_telepon">
                    </div>

                    <div class="form-group">
                        <label for="jam_operasional">Jam Operasional</label>
                        <input type="text" name="jam_operasional" value="<?php echo $data['jam_operasional'] ?>" class="form-control col-md-9" placeholder="Masukkan Tahun Buat">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>" class="form-control col-md-9" placeholder="Masukkan Tahun Rakit">
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

    mysqli_query($koneksi, "UPDATE tambal 
        SET id='$id', nama='$nama', alamat='$alamat', no_telepon='$no_telepon', jam_operasional='$jam_operasional', keterangan='$keterangan'
        WHERE id='$id'") or die(mysqli_error($koneksi));

    echo "<div align='center'><h5> Tolong Hadangi Lagi Meupdate Lahh...... </h5></div>";
    echo "<meta http-equiv='refresh' content='2;url=http://localhost/latihancrud/index.php'>";
}

?>