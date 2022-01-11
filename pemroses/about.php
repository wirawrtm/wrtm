<?php
include "koneksi.php";
$deskripsi=$_POST['deskripsi'];
$kecil1=$_POST['kecil1'];
$kecil2=$_POST['kecil2'];
$kecil3=$_POST['kecil3'];

$sql=mysqli_query($koneksi,"UPDATE about set kata2='$deskripsi', kecil1='$kecil1', kecil2='$kecil2', kecil3='$kecil3'");
if($sql){
    header('location:../admin/about.php');

}
?>