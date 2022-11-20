<?php

include('..\config\connector.php');


if (isset($_POST['selesai'])){
    $idMobil = rand();
    $namamobil = $_POST['namamobil'];
    $namapemilik = $_POST['namapemilik'];
    $merkmobil = $_POST['merkmobil'];
    $tanggalbeli = $_POST['tanggalbeli'];
    $deskripsimobil = $_POST['deskripsimobil'];

    $fotomobil = $_FILES["fotomobil"]["name"];
    $temp = $_FILES["fotomobil"]["tmp_name"];
    $folder = "../asset/Image/" . $fotomobil;
    move_uploaded_file($temp, '../asset/Image/'.$fotomobil);
    $pembayaran = $_POST['statuspembayaran'];

    $query = mysqli_query($connect, "INSERT INTO showroom_sonia_table(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$idMobil','$namamobil','$namapemilik','$merkmobil','$tanggalBeli','$deskripsimobil','$fotomobil','$pembayaran')");

    if ($query){
        header('Location: ..\pages\Sonia-Add.php');
    }
}
?>