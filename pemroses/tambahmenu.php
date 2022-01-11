<?php
include "koneksi.php";
$namamenu=$_POST['namamenu'];
$nama_file = $_FILES['gambar']['name'];
$isi=$_POST['isimenu'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../assets/img/menu/".$nama_file;

move_uploaded_file($tmp_file, $path);
$sql= mysqli_query ($koneksi, "INSERT into menu (namamenu, gambar, isimenu) values ('$namamenu', '$nama_file', '$isi')");

if  ($sql){
    header ('location: ../admin/menu.php');
}