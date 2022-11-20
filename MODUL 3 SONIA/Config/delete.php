<?php
$connect = mysqli_connect("localhost:3315", "root", "", "modul3");
$Listcar = $_GET["listcar"];

$query = "DELETE FROM modul3 WHERE nama_mobil = '$Listcar'";

mysqli_query($connect, $query);

echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = './index.php';
    </script>";

?>