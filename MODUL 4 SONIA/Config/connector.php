<?php
    $host="localhost:3315";
    $user="root";
    $password="";
    $db="wad_modul4_sonia";
    
    $connect = mysqli_connect($host,$user,$password,$db);
    if (!$connect){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>