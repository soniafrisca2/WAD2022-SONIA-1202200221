<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?php
    include('..\config\connector.php');
    $query = mysqli_query($connect,"SELECT id_mobil FROM `modul3`");
    $jumlah = mysqli_num_rows($query);
    $masukkan = mysqli_query($connect, "SELECT * FROM `modul3`");
    ?>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav navbar-dark">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link active" href="Sonia_Add.php">MyCar</a>
        </div>
        </div>
    </div>
    </nav>
</br>
    <!-- Grid -->
    <div class="container text-center">
        <div class="row">
            <h3 align="left">My Show Room</h3>
            <p align="left">List Show Room Sonia-1202200221</p>
        </div>
        
        <?php
        while ($isi = mysqli_fetch_array($masukkan)){
        ?>
        <br/>
        <div class="container">
        <div class="card" style="width: 18rem;">
        <img src="../Assets/Image/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $isi['nama_mobil'];?></h5>
                <p class="card-text"><?= $getDeskripsi = $isi['deskripsi'];
                echo $getDeskripsi;?></p>
                <div class="row">
                <div class="col">
                    <a href="./Sonia-Detail.php?id_mobil=<?php echo $isi['id_mobil']; ?>" class="btn btn-primary">Detail</a>
                </div>

                <div class="col">
                    <a href="../config/delete.php?id_mobil=<?php echo $isi['id_mobil']; ?>" class="btn btn-danger" name="id_mobil">Delete</a> 
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php
}
?>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

        