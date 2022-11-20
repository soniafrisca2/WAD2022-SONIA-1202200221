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
            <a class="nav-link active" href="Sonia-ListCar.php">MyCar</a>
        </div>
        </div>
    </div>
    </nav>
</br>
    <!-- Grid -->
    <div class="container text-center">
        <div class="row">
            <h3 align="left">Land Cruiser</h3>
            <p align="left">Detail mobil Land Cruiser</p>
            <!-- Kanan -->
            <div class="col">
                <img src="../Assets/Image/Land Cruiser.jpg" class="rounded float-start"height="300px"width="automatic" alt="Land Cruiser">
            </div>
            <!-- Kiri -->
            <div class="col" align="left">
            <form>
                <div class="mb-2">
                    <label for="NamaMobil" class="form-label"><strong>Nama Mobil</strong></label>
                    <input type="text" class="form-control" id="NamaMobil">
                </div>
                <div class="mb-3">
                    <label for="NamaPemilik" class="form-label"><strong>Nama Pemilik</strong></label>
                    <input type="text" class="form-control" id="NamaPemilik">
                </div>
                <div class="mb-2">
                    <label for="MerkMobil" class="form-label"><strong>Merk</strong></label>
                    <input type="text" class="form-control" id="MerkMobil">
                </div>
                <div class="mb-3">
                    <label for="TanggalBeli" class="form-label"><strong>Tanggal Beli</strong></label>
                    <input type="text" class="form-control" id="TanggalBeli">
                </div>
                <div class="mb-3">
                    <label for="DeskripsiMobil" class="form-label"><strong>Deskripsi</strong></label>
                    <textarea class="form-control" id="DeskripsiMobil" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="FotoMobil" class="form-label"><strong>Foto</strong></label>
                    <input type="File" class="form-control" id="FotoMobil">
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

</body>
</html>