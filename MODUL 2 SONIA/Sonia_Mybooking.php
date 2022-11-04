<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>MyBooking</title>
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
    <?php
        $nama = isset($_GET['nama']) ? $_GET['nama'] : '-';
        $date = isset($_GET['inputTanggal']) ? $_GET['inputTanggal'] : '-';
        $time = isset($_GET['inputTime']) ? $_GET['inputTime'] : '-';
        $duration = isset($_GET['inputdurasi']) ? $_GET['inputdurasi'] : '-';
        $checkout = strtotime($time) + strtotime($duration);
        $car = isset($_GET['inputcar']) ? $_GET['inputcar'] : '-';
        $phone = isset($_GET['inputnumber']) ? $_GET['inputnumber'] : '-';
        $service = isset($_GET['inputservice']) ? $_GET['inputservice'] : '-';
        ?>
    <section id="content">
        <h2 style="text-align:center; margin-top:50px">Thank you SONIA_1202200221 for Reserving</h2>
        <p style="text-align:center">Please double check your reservation details</p>
        <table class="table">
            <thead>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service(s)</th>
                <th scope="col">Total Price</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo(rand(0,999999) . "<br>");?></th>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $date . " " . $time?></td>
                    <td><?php echo date("H:i", $checkout) ?></td>
                    <td><?php echo $car ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $service ?></td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <div class="text-center p-4" class="footer" style="background-color: rgba(0, 0, 0, 0.05);">
        Created by Sonia_1202200221
    </div>
</body>
</html>