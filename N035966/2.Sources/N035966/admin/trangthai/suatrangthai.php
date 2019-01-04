<?php
    include('../config.php');
     $mattsua = $_POST['mattsua'];
     $tenttsua = $_POST['tenttsua'];
    
    $lenh = 'update trangthai set  tentt = "'.$tenttsua.'" where matt ='.$mattsua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>