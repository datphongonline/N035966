<?php
    include('../config.php');
    $map = $_POST['id'];
    $lenh = 'select * from loaiphong where malp='.$map;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['malp'],$row['tenlp']];
    echo $response[0].','.$response[1];
    
?>