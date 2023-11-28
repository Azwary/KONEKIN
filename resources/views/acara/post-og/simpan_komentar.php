<?php
session_start();
    include "../../config/koneksi.php";

    $username=$_SESSION['username'];
    $komentar=$_POST['komentar'];
   

    $b=mysqli_query($conn,"INSERT INTO komentar_acara(username, komentar) VALUES('$username','$komentar')") or die(mysqli_error($conn));

    if($b)
    {
        echo "<script>alert('Komentar Berhasil dikirim..!!')</script>";
        echo "<script>window.location.href='bolean22.php';</script>";
        
      
    }
    else
    {
        echo "Gagal Menyimpan Data Kategori";
    }
?>