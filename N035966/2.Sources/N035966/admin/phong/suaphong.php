<?php
    include('../config.php');
     $tenpsua = $_POST['tenpsua'];
     $mapsua = $_POST['mapsua'];
     $malpsua = $_POST['malpsua'];
     $giapsua = $_POST['giapsua'];
     $trangthaisua = $_POST['trangthaisua'];
     $soluongsua = $_POST['soluongsua'];
    $lenh = 'update phong set tenp ="'.$tenpsua.'", malp = '.$malpsua.',giap = '.$giapsua.',trangthai ='.$trangthaisua.',soluong='.$soluongsua' where map ='.$mapsua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>