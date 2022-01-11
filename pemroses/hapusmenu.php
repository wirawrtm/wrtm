<?php
    include "koneksi.php";
    $id=$_GET['id'];

    $sqltampil=mysqli_query ($koneksi, "SELECT * from menu where id=$id");
    $tampil=mysqli_fetch_array($sqltampil);
    $hapus="../assets/img/menu/".$tampil['gambar'];
    unlink ($hapus);

    $sql=mysqli_query($koneksi, "DELETE from menu where id=$id");
    header("location:../admin/menu.php");
?>