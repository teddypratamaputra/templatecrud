<?php
include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data</title>
    <link rel="stylesheet" href="css/sb-admin-2.min.css" />

    <style>
        * {
            box-sizing: border-box;
            font-size: 15px;
            font-family: Tahoma;
            color: black;
        }

        body {
            background-color: #fff;
        }

        .margin {
            background-color: #fff;
            width: 100%;
            margin: auto;
            box-shadow: 0 1px 1px 0 #ccc;
            padding: 40px 60px;
        }

        .top {
            margin-top: -16px;
        }

        table {
            width: 100%;

        }

        /*td:first-child {
			width: 10%;
		}*/
        td {
            padding: 10px;
        }

        h4 {
            font-size: 25px;
        }

        h1 {
            font-size: 30px;
            font-weight: bold;
        }

        h2 {
            font-size: 20px;
            padding-left: 30px;
        }
    </style>
</head>

<body>
    <div class="margin">
        <h1>&nbsp &nbsp LAPORAN DATA<h2>&nbspBENGKEL BALABALABALA</h2>
        </h1>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="border border-dark">ID</th>
                            <th style="text-align: center;" class="border border-dark">Nama</th>
                            <th style="text-align: center;" class="border border-dark">Alamat</th>
                            <th style="text-align: center;" class="border border-dark">No Telepon</th>
                            <th style="text-align: center;" class="border border-dark">Jam Operasional</th>
                            <th style="text-align: center;" class="border border-dark">Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, 'SELECT * FROM tambal');
                        while ($data = mysqli_fetch_assoc($query)) { ?>

                    <tbody class="border border-dark">
                        <tr>
                            <td style="text-align: center" class="border border-dark"><?= $data['id'] ?></td>
                            <td style="text-align: center" class="border border-dark"><?= $data['nama'] ?></td>
                            <td style="text-align: center" class="border border-dark"><?= $data['alamat'] ?></td>
                            <td style="text-align: center" class="border border-dark"><?= $data['no_telepon'] ?></td>
                            <td style="text-align: center" class="border border-dark"><?= $data['jam_operasional'] ?></td>
                            <td style="text-align: center" class="border border-dark"><?= $data['keterangan'] ?></td>
                        </tr>
                    </tbody>
                <?php }
                ?>
                </tbody>
                </table>
            </div><br>

            <table class="" style="width: 200px;font-size: 11px;float:right;margin-top: 20px;">
                <tr>
                    <th colspan="2">Banjarmasin, <?= date('Y-m-d') ?></th>
                </tr>
                <tr style="height: 100px;">
                    <td style="width: 50%">

                    </td>
                </tr>
                <tr>
                    <td>
                        <center>Yang Bersangkutan</center>
                    </td>
                </tr>
            </table>


</body>

</html>
<script src="/js/jquery.js" type="text/javascript"></script>
<!-- <script src="./../../assets/script.js"></script> -->
<!-- <script src="./../../assets/script.js"></script> -->
<script>
    window.print();
</script>

// nominal duit
<!--<td style="text-align: center" class="border border-dark">Rp. <?= number_format(
                                                                    $data['nominal'],
                                                                    2,
                                                                    ',',
                                                                    '.'
                                                                ) ?></td> -->