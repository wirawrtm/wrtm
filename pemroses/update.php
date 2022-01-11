<?php
    include "koneksi.php";
    $sqltampil=mysqli_query ($koneksi, "SELECT * from home");
    $tampil=mysqli_fetch_array($sqltampil);
    $hapus="../assets/img/".$tampil['background'];
    unlink ($hapus);
    $nama_file = $_FILES['background']['name'];
    $ukuran_file = $_FILES['background']['size'];
    $tipe_file = $_FILES['background']['type'];
    $tmp_file = $_FILES['background']['tmp_name'];
    $path = "../assets/img/".$nama_file;

    move_uploaded_file($tmp_file, $path);

    $judulbesar=$_POST['judulbesar'];
    $judulkecil=$_POST['judulkecil'];
    $sql=mysqli_query ($koneksi, "UPDATE home set background='$nama_file', judulbesar='$judulbesar', judulkecil='$judulkecil'");
    if($sql){
        header('location:../admin/home.php');
    }
?>