<?php
    include('../config.php');
     $mahuydpsua = $_POST['mahuydpsua'];
     $maksua = $_POST['maksua'];
     $mapsua = $_POST['mapsua'];
     $chuthichsua = $_POST['chuthichsua'];
     $ngayhuysua = $_POST['ngayhuysua'];
    
    $lenh = 'update huydp set mak ='.$maksua.',map ='.$mapsua.',chuthich = '.$chuthichsua.',ngayhuy = "'.$ngayhuysua.'" where mahuydp ='.$mahuydpsua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>