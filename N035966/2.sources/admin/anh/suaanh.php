<?php
    include('../config.php');
     $map = $_POST['mapsua'];
     $ha = $_POST['hasua'];
     $maa = $_POST['maasua'];
    $lenh = 'update anh set map ='.$map.', hinhanh = "'.$ha.'" where maanh ='.$maa;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>