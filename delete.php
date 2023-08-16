<?php
    include "connection.php";
    $id = $_GET['id'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM tambal WHERE id='$id'");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>