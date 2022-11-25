<?php

include('../Config/connector.php');


if (isset($_POST['submit'])){
    $id_mobil = rand();
    $nama_mobil = $_POST['nama_mobil'];
    $nama_pemilik = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];

    $foto_mobil = $_FILES["foto_mobil"]["name"];
    $temp = $_FILES["foto_mobil"]["temp_name"];
    $folder = "../Assets/Image/" . $foto_mobil;
    move_uploaded_file($temp, '../Assets/Image/'.$foto_mobil);
    $status_pembayaran = $_POST['status_pembayaran'];

    $query = mysqli_query($connect, "INSERT INTO `modul3`(`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`)
                                         VALUES('$id_mobil','$nama_mobil','$nama_pemilik','$merk_mobil','$tanggal_beli','$deskripsi','$foto_mobil','$status_pembayaran')");

    if ($query){
        echo "data berhasil";
    }else {
        echo "Data Gagal Ditambahkan";
    }
}
?>