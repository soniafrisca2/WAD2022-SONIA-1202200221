<?php
session_start();
unset($_SESSION['email']);
header("location:./pages/Sonia-home.php");
?>