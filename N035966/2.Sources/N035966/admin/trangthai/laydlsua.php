<?php
    include('../config.php');
    $matt = $_POST['id'];
    $lenh = 'select * from trangthai where matt='.$matt;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['matt'],$row['tentt']];
    echo $response[0].','.$response[1];
    
?>