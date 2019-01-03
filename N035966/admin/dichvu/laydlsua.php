<?php
    include('../config.php');
    $map = $_POST['id'];
    $lenh = 'select * from dichvu where madv='.$map;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['madv'],$row['tendv'],$row['giadv']];
    echo $response[0].','.$response[1].','.$response[2];
    
?>