<?php
    include('../config.php');
     $tenttthem = $_POST['tenttthem'];
     
    $lenh = 'insert trangthai value(NULL,"'.$tenttthem.'")';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>