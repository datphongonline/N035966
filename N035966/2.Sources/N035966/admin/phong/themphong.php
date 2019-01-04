<?php
    include('../config.php');
     $tenpthem = $_POST['tenpthem'];
     $mapthem = $_POST['mapthem'];
     $malpthem = $_POST['malpthem'];
     $giapthem = $_POST['giapthem'];
     $trangthaithem = $_POST['trangthaithem'];
     $soluongthem = $_POST['soluongthem'];
    $lenh = 'insert phong value("'.$tenthem.'",NULL,'.$malpthem.','.$giapthem.','.$trangthaithem.','.$soluongthem.')';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>