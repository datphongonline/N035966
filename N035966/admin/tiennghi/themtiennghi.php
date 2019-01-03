<?php
    include('../config.php');
     $tentn = $_POST['tentnt'];
    $lenh = 'insert tiennghi value(NULL,"'.$tentn.'")';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>