<?php
    include('../config.php');
     $tenlpthem = $_POST['tenlpthem'];
     
    $lenh = 'insert loaiphong value(NULL,"'.$tenlpthem.'")';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>