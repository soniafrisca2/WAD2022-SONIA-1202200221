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
            <a class="nav-link active" aria-current="page" href="Sonia-homeutama.php">Home</a>
            <a class="nav-link active" href="../Pages/Sonia-ListCar.php">MyCar</a>
        </div>
        </div>
        <div class="d-flex">
        <div class="navbar-nav navbar-dark">
            <a class="btn btn-primary" class="nav-link active"  href="../Pages/Sonia-Add.php">Add Car</a>
        </div>
        <div class="dropdown">
        <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Nama
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Sonia-Profile.php">Profile</a></li>
          <li><a class="dropdown-item" href="./Config/logout.php">Logout</a></li>
        </ul>
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
                <div class="text-start">
                    <a href="Sonia-Add.php" class="btn btn-primary" role="button">MyCar</a>
                </div>
                <br>
                <!-- kiri -->
            <div class="col" align="left">
        <div class="mb-3">
          <div class="d-flex left">
          <img src="../Assets/Image/logo-ead.png" style="width:100px;height:30px;float:left;margin-top:20px"/> <p style= "padding-left: 20px;margin-top:20px" >Sonia_1202200221</p>       
          </div>
        </div>
            </div>
        </div>


        <!-- Kanan -->
        <div class="col">
        <img src="../Assets/Image/Land Cruiser.jpg" class="rounded mx-auto d-block" height="300" weidth="100">
        </div>
    </div>
    </div>
</html>