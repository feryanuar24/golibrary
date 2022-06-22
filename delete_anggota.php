<?php
include 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM anggota WHERE id='$id'");
header("Location: anggota.php");
?>