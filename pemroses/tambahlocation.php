<?php
    include "koneksi.php";
    $namacabang=$_POST['namacabang'];
    $alamat=$_POST['alamat'];
    $instagram=$_POST['instagram'];
    $gambar=$_FILES['foto']['name'];
    $tmp_name=$_FILES['foto']['tmp_name'];
    $path= "../assets/img/cabang/".$gambar;

    move_uploaded_file ($tmp_name, $path);
    $sql=mysqli_query ($koneksi, "INSERT into location (namacabang, gambar, alamat, instagram) values ('$namacabang', '$gambar', '$alamat', '$instagram')");

    if($sql){
        header ("location:../admin/location.php");
    }
?>