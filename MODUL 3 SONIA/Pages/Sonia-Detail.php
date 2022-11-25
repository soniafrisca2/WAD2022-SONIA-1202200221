<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav navbar-dark">
            <a class="nav-link active" aria-current="page" href="Sonia-home.php">Home</a>
            <a class="nav-link active" href="Sonia-Add.php">MyCar</a>
        </div>
        </div>
    </div>
    </nav>
</br>
    <!-- Grid -->
    <div class="container px-4 text-start">
            <div class="row gx-5">
                <div class="col">
                    <div class="">
                        <h1 class="text-start">Nama Mobil</h1>
                        <p class="text-start text-muted">Detail Mobil</p>
                        <br>
                    </div>

                    <?php
                    include('../Config/connector.php');

                    $idmobil = $_GET['id_mobil'];
                    $data = mysqli_query($connect,"SELECT * FROM modul3 WHERE id_mobil = $idmobil");
                    $jumlahdata = mysqli_num_rows($data);
                    $detailMobil = mysqli_fetch_array($data) or die("line 50 not working");
                    $foto = $detailMobil['foto_mobil'];

                    ?>
                        <div class="container text-start">
                            <div class="row">
                                <div class="col align-self-start">
                                    <br>
                                    <img src="../Assets/Image/<?php echo $detailMobil['foto_mobil'];?>" class ="rounded" alt="mobil" width="Automatic" height="310" >
                                </div>
                                <div class="col" align="left">
                                    <form>
                                        <div class="mb-2">
                                            <label for="nama_mobil" class="form-label"><strong>Nama Mobil</strong></label>
                                            <input type="text" class="form-control" id="nama_mobil">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_pemilik" class="form-label"><strong>Nama Pemilik</strong></label>
                                            <input type="text" class="form-control" id="nama_pemilik">
                                        </div>
                                        <div class="mb-2">
                                            <label for="merk_mobil" class="form-label"><strong>Merk</strong></label>
                                            <input type="text" class="form-control" id="merk_mobil">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal_beli" class="form-label"><strong>Tanggal Beli</strong></label>
                                            <input type="text" class="form-control" id="tanggal_beli">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label"><strong>Deskripsi</strong></label>
                                            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto_mobil" class="form-label"><strong>Foto</strong></label>
                                            <input type="File" class="form-control" id="foto_mobil">
                                            </br>
                                        <p><strong>Status Pembayaran</strong></p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Lunas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Belum Lunas</label></br>
                                                                </div></br>
                                        </br>
                                        <a class="btn btn-primary" href="#" role="button">Edit</a>
                                        </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </div>
</body>
</html>
