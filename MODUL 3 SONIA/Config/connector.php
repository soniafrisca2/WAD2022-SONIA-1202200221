<?php
    $host="localhost:3315";
    $user="root";
    $password="";
    $db="showroom_sonia_table";
    
    $connect = mysqli_connect($host,$user,$password,$db);
    if (!$connect){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>