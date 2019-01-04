<?php
    include('../config.php');
    $mattthem= $_POST['mattthem'];
    $makthem = $_POST['makthem'];
    $datphongtuthem = $_POST['datphongtuthem'];
    $denngaythem = $_POST['denngaythem'];
    $chuthichthem=$_POST['chuthichthem'];  
    $mapthem = $_POST['mapthem'];
    $lenh = 'insert ttdatphong value(NULL,'.$mattthem.','.$makthem.','.$mapthem.',"'.$datphongtuthem.'","'.$denngaythem.'",NULL,NULL,"'.$chuthichthem.'")';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>