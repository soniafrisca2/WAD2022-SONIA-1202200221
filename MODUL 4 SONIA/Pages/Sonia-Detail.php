<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <style>
    </style>
<body>
    <?php
    include('..\Config\conn.php');
    $query = mysqli_query($connect,"SELECT id_mobil FROM `modul3`");
    $jumlah = mysqli_num_rows($query);

    $id = $_GET[("id_mobil")];
    $ambil = mysqli_query($connect, "SELECT * FROM modul3 WHERE id_mobil= $id");
    $data = mysqli_fetch_assoc($ambil);
    ?>
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
          <li><a class="dropdown-item" href="../Config/logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    </nav>

    <!-- DETAIL -->
    <section id="item-detail">
      <div class="container">
        <div class="mt-4">
          <h2><?= $data["nama_mobil"]; ?></h2>
          <p>Detail Mobil <?= $data["nama_mobil"]; ?></p>
        </div>
        <div class="row mt-5 justify-content-between">
          <div class="col-md-5">
            <img src="../Assets/Image/<?= $data["foto_mobil"]; ?>" alt="" width="100%">
          </div>
          <div class="col-md-7">
            <form action="Sonia-Add.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_mobil" value="<?= $data["id_mobil"]; ?>">
              <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" value="<?= $data["nama_mobil"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" name="pemilik_mobil" class="form-control" id="pemilik_mobil" value="<?= $data["pemilik_mobil"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="merk_mobil" class="form-label fw-bold">Merk</label>
                <input type="text" name="merk_mobil" class="form-control" id="merk_mobil" value="<?= $data["merk_mobil"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli" value="<?= $data["tanggal_beli"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" placeholder="<?= $data["deskripsi"]; ?>" readonly></textarea>
              </div>
              <div class="mb-3 position-relative foto">
                <label for="foto_mobil" class="form-label fw-bold">Foto</label>
                <input class="form-control" name="foto_mobil" type="file" id="foto_mobil" style="color: transparent" value="<?= $data["foto_mobil"]; ?>" disabled>
                <span><?= $data["foto_mobil"]; ?></span>
              </div>
              <div class="mb-3">
                <span class="d-block mb-2 fw-bold">Status Pembayaran</span>
                <?php if($data["status_pembayaran"] === "Lunas") : ?>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="Status1" value="Lunas" disabled>
                    <label class="form-check-label" for="Status1">Lunas</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="Status2" value="Belum Lunas" disabled>
                    <label class="form-check-label" for="Status2">Belum Lunas</label>
                  </div>
                <?php else : ?>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="Status1" value="Lunas" disabled>
                    <label class="form-check-label" for="Status1">Lunas</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="Status2" value="Belum Lunas" disabled>
                    <label class="form-check-label" for="Status2">Belum Lunas</label>
                  </div>
                <?php endif; ?>
              </div>
              <a href="Sonia-Edit.php?id_mobil=<?php echo $data['id_mobil']; ?>" type="submit" class="btn btn-primary mb-5" name="edit">Edit</a>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>