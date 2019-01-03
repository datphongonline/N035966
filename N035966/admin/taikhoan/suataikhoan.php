<?php
    include('../config.php');
     $matksua = $_POST['matksua'];
     $tentksua = $_POST['tentksua'];
     $mksua = $_POST['mksua'];
    
    $lenh = 'update taikhoan set  tendangnhap = "'.$tentksua.'",matkhau ='.$matksua.' where matk ='.$matksua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>