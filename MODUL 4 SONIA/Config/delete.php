<?php
include('../Config/conn.php');

$id = $_GET['id_mobil'];

$sql = "DELETE FROM modul3 WHERE id_mobil = $id";

if (mysqli_query($connect, $sql)) {
                echo "Record deleted successfully";
        } else {
                        echo "Error deleting record: " . mysqli_error($connect);
                }       
?>    