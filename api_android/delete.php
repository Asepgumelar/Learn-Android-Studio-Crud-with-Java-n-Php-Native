<?php
    $id = $_GET['id'];

    require_once('include/Config.php');

    $sql = "DELETE FROM tb_pegawai WHERE id=$id;";

    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menghapus Pegawai';
    }else{
        echo 'Gagal Menghapus Pegawai';
    }

    mysqli_close($con);
?>