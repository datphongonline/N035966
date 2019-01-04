<?php
    include('../config.php');
    $tentn = $_POST['tentnsua'];
    $matn = $_POST['matnsua'];
    $lenh= 'update tiennghi set tentn = "'.$tentn.'" where matn = '.$matn;
    mysqli_set_charset($conn,'utf8');
    $kq = mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>