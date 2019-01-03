<?php
    include('../config.php');
     $madvsua = $_POST['madvsua'];
     $tendvsua = $_POST['tendvsua'];
     $giadvsua = $_POST['giadvsua'];
    
    $lenh = 'update dichvu set  tendv = "'.$tendvsua.'", giadv = '.$giadvsua.' where madv ='.$madvsua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>