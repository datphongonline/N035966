<?php
    include('../config.php');
    $matk = $_POST['id'];
    $lenh = 'select * from taikhoan where matk='.$matk;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['matk'],$row['tendangnhap'],$row['matkhau']];
    echo $response[0].','.$response[1].','.$response[2];
    
?>