<?php
    include('../config.php');
    $mattdpsua = $_POST['mattdpsua'];
    $mattsua= $_POST['mattsua'];
    $maksua = $_POST['maksua'];
    $datphongtusua = $_POST['datphongtusua'];
    $denngaysua = $_POST['denngaysua'];
    $chuthichsua=$_POST['chuthichsua'];  
    $mapsua = $_POST['mapsua'];
    $lenh = 'update ttdatphong set matt ='.$mattsua.', mak = '.$maksua.', datphongtu = "'.$datphongtusua.'", denngay="'.$denngaysua.'",chuthich = "'.$chuthichsua.'" where mattdp ='.$mattdpsua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>