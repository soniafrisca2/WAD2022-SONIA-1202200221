<?php
    include_once('./Config/connector.php');
    $data = mysqli_query($connect,"SELECT id_mobil FROM `modul3`");
    $jumlahdata = mysqli_num_rows($data);
?>
<!doctype html>
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <?php
                if ($jumlahdata == 0) {
                    echo '<a class="nav-link active" href="pages/Sonia-Add.php">MyCar</a>';
                } else {
                    echo '<a class="nav-link active" href="pages/Sonia-ListCar.php">MyCar</a>';
                }
            ?>
        </div>
        </div>
    </div>
    </nav>

    <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!-- Grid -->
            <div class="container text-center">
            <div class="row">
            <!-- kiri -->
        <div class="col">
        <h1 class="text-start">Selamat Datang Di </br> Showroom Sonia</h1>
        <p class="text-start">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        <br>
            <!-- button -->
            <br>
                <div class="text-start">
                    <!-- <a href="Sonia-Add.php" class="btn btn-primary" role="button">MyCar</a><br> -->
                    <?php
                    if ($jumlahdata == 0) {
                        echo '<a class="btn btn-primary " href="pages/Sonia-Add.php">MyCar</a>';
                    } else {
                        echo '<a class="btn btn-primary " href="pages/Sonia-ListCar.php">MyCar</a>';
                    }
                    
                    ?>
                </div>
                <br>
                <!-- kiri -->
            <div class="col" align="left">
            <img src="Assets/Image/logo-ead.png" alt="logo-ead" height="29" weidth="automatic">
            Sonia_1202200221
            </div>
        </div>


        <!-- Kanan -->
        <div class="col">
        <img src="Assets/Image/Land Cruiser.jpg" class="rounded mx-auto d-block" height="300" weidth="100">
        </div>
    </div>
    </div>
</html>