<?php
    include('connector.php');
    $idMobil = $_GET['id_mobil'];
    $namaMobil = $_POST['nama_mobil'];
    $namaPemilik = $_POST['pemilik_mobil'];
    $merk = $_POST['merk_mobil'];
    $tglBeli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto_mobil']['name'];
    $foto_tmp = $_FILES['foto_mobil']['tmp_name'];
    $pembayaran = $_POST['status_pembayaran'];

    $path = '../Assets/Image/';

    move_uploaded_file($foto_tmp, $path.$foto);

    $query = mysqli_query($connect, "UPDATE modul3 SET nama_mobil = '$namaMobil', pemilik_mobil = '$namaPemilik', merk_mobil='$merk', 
    tanggal_beli='$tglBeli', deskripsi = '$deskripsi', foto_mobil='$foto', status_pembayaran='$pembayaran' WHERE id_mobil = '$idMobil'");
                                         
    if($query){
        echo "<script>alert('Berhasil update')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/Sonia-Profile.php'>";
    } else {
        echo "<script>alert('Gagal update)</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/Sonia-Profile.php'>";
    }
?>