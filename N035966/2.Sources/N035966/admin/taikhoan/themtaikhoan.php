<?php
    include('../config.php');
     $tentkthem = $_POST['tentkthem'];
     $mkthem = $_POST['mkthem'];
    $lenh = 'insert taikhoan value(NULL,"'.$tentkthem.'",'.$mkthem.')';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>