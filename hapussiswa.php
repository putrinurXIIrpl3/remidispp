<?php
include 'koneksi.php';
$NIS = $_GET["NIS"];
$query = "delete from siswa where NIS='$NIS'";
mysqli_query($koneksi, $query);
header("location:tabelsiswa.php");