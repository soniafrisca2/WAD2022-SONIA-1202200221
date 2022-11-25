<?php

include('../config/connector.php');


if (isset($_POST['end'])){
    $namaMobil = $_POST['nama_mobil'];
    $namaPemilik = $_POST['pemilik_mobil'];
    $merk = $_POST['merk_mobil'];
    $tglBeli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES["foto_mobil"]["name"];
    $temp = $_FILES["foto_mobil"]["tmp_name"];
    $folder = "../Assets/Image/" . $foto;
    move_uploaded_file($temp, '../Assets/Image/'.$foto);
    $pembayaran = $_POST['status_pembayaran'];

    $query = mysqli_query($connect, "INSERT INTO modul3(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$namaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$foto','$pembayaran')");

    if ($query){
        header('Location: ..\Pages\Sonia-ListCar.php');
    }
}
?>