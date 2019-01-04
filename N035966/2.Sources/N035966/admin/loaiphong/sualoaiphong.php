<?php
    include('../config.php');
     $malpsua = $_POST['malpsua'];
     $tenlpsua = $_POST['tenlpsua'];
    
    $lenh = 'update loaiphong set  tenlp = "'.$tenlpsua.'" where malp ='.$malpsua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>