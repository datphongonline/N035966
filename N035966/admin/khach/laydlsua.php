<?php
    include('../config.php');
    $mak = $_POST['id'];
    $lenh = 'select * from khach where mak='.$mak;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['mak'],$row['hotenk'],$row['sdt']];
    echo $response[0].','.$response[1].','.$response[2];
    
?>