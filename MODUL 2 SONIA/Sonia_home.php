<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section id="home">
        <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
            <div class="mx-auto d-flex">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Sonia_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Sonia_booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="content">
        <div class="container-fluid text-center py-5">
            <h2>Welcome to EAD Rent</h2>
            <p>Find your best deal here!</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://akcdn.detik.net.id/visual/2021/11/26/daihatsu-ayla-dok-daihatsu_169.jpeg?w=715&q=90" class="card-img-top" style="height:300px">
                        <div class="card-body">
                            <h3 class="card-title">Daihatsu Ayla</h3>
                            <p class="card-text">Rp.150.000/day</p>
                            <hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">5 Kursi</p><hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">1200 CC</p><hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">Manual</p>
                        </div>
                            <div class="card-footer">
                                <a href="Sonia_booking.php?car=<?php echo 'https://akcdn.detik.net.id/visual/2021/11/26/daihatsu-ayla-dok-daihatsu_169.jpeg?w=715&q=90' ?>"><button type="button" class="btn btn-primary btn-block"style="width:30%">Book Now</button></a>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/1_veloz-black-metallic.png" class="card-img-top" style="height:300px">
                        <div class="card-body">
                            <h3 class="card-title">Toyota Avanza</h3>
                            <p class="card-text">Rp.200.000</p>
                            <hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">7 Kursi</p><hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">1500 CC</p><hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">Matic</p>
                        </div>
                            <div class="card-footer">
                                <a href="Sonia_booking.php?car=<?php echo 'https://www.toyota.astra.co.id/sites/default/files/2021-11/1_veloz-black-metallic.png' ?>"><button type="button" class="btn btn-primary btn-block"style="width:30%">Book Now</button></a>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.toyota.astra.co.id/sites/default/files/2021-06/1.%20alphard%20colors%20white%20pearl.png" class="card-img-top" style="height:300px">
                        <div class="card-body">
                            <h3 class="card-title">Toyota alphard</h3>
                            <p class="card-text">Rp.400.000</p>
                            <hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">7 Kursi</p><hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">2494 CC</p><hr>
                            <p style="color:blue; font-size:15px; font-weight:bold">Matic</p>
                        </div>
                            <div class="card-footer">
                                <a href="Sonia_booking.php?car=<?php echo 'https://www.toyota.astra.co.id/sites/default/files/2021-06/1.%20alphard%20colors%20white%20pearl.png' ?>"><button type="button" class="btn btn-primary btn-block"style="width:30%">Book Now</button></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Created by Sonia_1202200221
    </div>

</body>
</html>

