<?php
    include('../config.php');
     $mapthem = $_POST['mapthem'];
     $hathem = $_POST['hathem'];
    $lenh = 'insert anh value(NULL,'.$mapthem.',"'.$hathem.'")';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>