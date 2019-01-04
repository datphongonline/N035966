<?php
    include('../config.php');
    $mahuydp = $_POST['id'];
    $lenh = 'select * from huydp where mahuydp='.$mahuydp;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['mahuydp'],$row['mak'],$row['map'],$row['chuthich'],$row['ngayhuy']];
    echo $response[0].','.$response[1].','.$response[2].','.$response[3].','.$response[4];
    
?>