<?php
    include "koneksi.php";
    $lokasi=$_POST['lokasi'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $maps=$_POST['map'];

    $sql=mysqli_query($koneksi,"Update contactus set lokasi='$lokasi', email='$email', telp= '$phone', googlemap='$maps'");
    if($sql){
        header ("location:../admin/contactus.php");
    }
?>