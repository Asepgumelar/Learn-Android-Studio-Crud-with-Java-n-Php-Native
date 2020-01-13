<?php
    require_once('include/Config.php');

    $sql = "SELECT * FROM tb_pegawai";
    $r = mysqli_query($con, $sql);
    $result =array();

    while($row = mysqli_fetch_array($r)){
        array_push($result, array(
            "id"=>$row['id'],
            "name"=>$row['nama'],
            "desg"=>$row['posisi'],
            "salary"=>$row['gajih']
        ));
    }

    echo json_encode(array('result'=>$result));

    mysqli_close($con);
?>