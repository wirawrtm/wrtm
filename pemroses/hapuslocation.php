<?php
include "koneksi.php";
$id=$_GET['id'];

$sqltampil=mysqli_query ($koneksi, "SELECT * from location where id=$id");
$tampil=mysqli_fetch_array($sqltampil);
$hapus="../assets/img/cabang/".$tampil['gambar'];
unlink ($hapus);

$sql=mysqli_query ($koneksi, "DELETE from location where id=$id");
header ("location:../admin/location.php");
?>