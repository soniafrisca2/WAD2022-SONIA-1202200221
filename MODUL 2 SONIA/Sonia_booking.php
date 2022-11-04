<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Booking</title>
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
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
        <h2 style="text-align:center; padding:50px">Rent your car now!</h2>
        <div class="container-fluid text-center">
            <div class="mt-1 row " style="padding:50px; text-align:justify">
                <div class="col-sm-6 py-5">
                    <div class="p-5">
                        <div class="container">
                            <div class="img-card">
                                <?php
                                if (empty($_GET['image'])) {
                                    echo '<center><img class="img-fluid carPreview prev" src="https://akcdn.detik.net.id/visual/2021/11/26/daihatsu-ayla-dok-daihatsu_169.jpeg?w=715&q=90"></center>';
                                } else {
                                    echo '<img class="img-fluid carPreview prev" src="https://' . $_GET['image'] .'">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 px-2">
                    <form method="GET" action="Sonia_Mybooking.php">
                        <div class="mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="SONIA_1202200221" readonly="true">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputTanggal" class="col-sm-3 col-form-label">Book Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputTanggal" placeholder="dd/mm/yyyy" name="inputTanggal" value="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputTime" class="col-sm-3 col-form-label">Start Time</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="inputTime" placeholder="--:-- --" name="inputTime" value="" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputdurasi" class="col-sm-3 col-form-label">Duration (Hours)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" min="2" aria-describedby="days">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputcar" class="col-sm-10 col-form-label">Car Type</label>
                            <div class="col-sm-10">
                                <select name="inputcar" id="" class="form-select">
                                    <option value="Daihatsu Ayla">Daihatsu Ayla</option>
                                    <option value="Toyota Avanza">Toyota Avanza</option>
                                    <option value="Toyota Alphard">Toyota Alphard</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-10 col-form-label" for="inputnumber">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputnumber" name="hp" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-10 col-form-label" for="inputservice">Add Service(s)</label>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" name="protocol" value="protocol">
                                <label class="form-check-label">Health protocol / Rp 25.000</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" name="supir" value="supir">
                                <label class="form-check-label">Driver / Rp 100.000</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" name="Bahanbakar" value="Bahanbakar">
                                <label class="form-check-label">Filled fuel / Rp 250.000</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-sm-12 py-3">
                                <buon style="width:90%;background-color:green;color:white;"  type="submit" class="btn btn-outline-primary btn-center">Book</buon>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">Created by Sonia_1202200221</div>
</body>
</html>