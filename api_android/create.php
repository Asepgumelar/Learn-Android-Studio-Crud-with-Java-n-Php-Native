<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $desg = $_POST['desg'];
        $sal = $_POST['salary'];

        $sql = "INSERT INTO tb_pegawai (nama,posisi,gajih) VALUES ('$name','$desg','$sal')";

        require_once('include/Config.php');

        if(mysqli_query($con, $sql)){
            echo "Data success has been added";
        }else{
            echo "Failed to add data";
        }

        mysqli_close($con);
    }
?>