<?php
    include('../config.php');
    $map = $_POST['id'];
    $lenh = 'select * from phong where map='.$map;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['tenp'],$row['malp'],$row['giap'],$row['trangthai'],$row['sogiuong']];
    echo $response[0].','.$response[1].','.$response[2].','.$response[3].','.$response[4];
    
?>