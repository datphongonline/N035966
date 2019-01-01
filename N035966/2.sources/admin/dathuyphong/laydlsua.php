<?php
    include('../config.php');
    $mattdp = $_POST['id'];
    $lenh = 'select * from ttdatphong where mattdp='.$mattdp;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['matt'],$row['map'],$row['mak'],$row['datphongtu'],$row['denngay'], $row['chuthich']];
    echo $response[0].','.$response[1].','.$response[2].','.$response[3].','.$response[4].','.$response[5];
    
?>