<?php

include('..\Config\connector.php');


if (isset($_POST['submit'])){
    $idMobil = rand();
    $namaMobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tglBeli = $_POST['tgl_Beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES["foto"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../Assets/Image/" . $foto;
    move_uploaded_file($temp, '../Assets/Image/'.$foto);
    $pembayaran = $_POST['pembayaran'];

    $query = mysqli_query($connect, "INSERT INTO modul3(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$idMobil','$namaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$foto','$pembayaran')");

    if ($query){
        header('Location: ..\pages\Sonia-ListCar.php');
    }
}
?>