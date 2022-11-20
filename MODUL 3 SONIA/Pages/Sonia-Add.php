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

    <br>
    <!-- TEXT -->
    <div class="container px-4 text-center">
        <div class="row gx-5">
            <div class="col">
                <div align="left"><h3>Tambah Mobil</h3></div>
            </div>
        </div>
    </div>
    <div class="container px-4 text-start">
        <div class="row gx-5">
            <div class="col">
                <div class="text-secondary" align="left">Tambah Mobil baru anda ke list show room</div></br><br>
            </div>
            <!-- FORM -->
            <form action=create.php method="post">
                <div class="mb-2">
                    <label for="namamobil" class="form-label"><strong>Nama Mobil</strong></label>
                    <input type="text" class="form-control" id="namamobil" placeholder="Land Cruiser">
                </div>
                <div class="mb-3">
                    <label for="namapemilik" class="form-label"><strong>Nama Pemilik</strong></label>
                    <input type="text" class="form-control" id="namapemilik" placeholder="sonia-1202200221">
                </div>
                <div class="mb-2">
                    <label for="merkmobil" class="form-label"><strong>Merk</strong></label>
                    <input type="text" class="form-control" id="merkmobil" placeholder="Toyota">
                </div>
                <div class="mb-3">
                    <label for="tanggalbeli" class="form-label"><strong>Tanggal Beli</strong></label>
                    <input type="date" class="form-control" id="tanggalbeli" placeholder="dd/mm/yyyy">
                </div>
                <div class="mb-3">
                    <label for="deskripsimobil" class="form-label"><strong>Deskripsi</strong></label>
                    <textarea class="form-control" id="deskripsimobil" rows="3" placeholder="The All-New Land Cruiser is the perfect misfit that will lead you to the edge of the world. The divine appearance is forged with attention to detailed craftsmanship, bringing a formidable and luxurious masterpiece capable of facing the brutal terrain off the road yetattracting every eye with a delightful sensation to spread a glamorous on-road lifestyle."></textarea>
                </div>
                <div class="mb-3">
                    <label for="fotomobil" class="form-label"><strong>Foto</strong></label>
                    <input type="File" class="form-control" id="fotomobil">
                    </br>
                <p><strong>Status Pembayaran</strong></p>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="statuspembayaran" value="option1">
                <label class="form-check-label" for="statuspembayaran">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="statuspembayaran" value="option2">
                <label class="form-check-label" for="statuspembayaran">Belum Lunas</label></br>
                </div>
                </br>
                </br>
                <a class="btn btn-primary" href="#" role="button">Selesai</a>
                </form> 
        </div>
    </div>
</html>
[]

