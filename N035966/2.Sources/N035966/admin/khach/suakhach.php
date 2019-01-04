<?php
    include('../config.php');
     $maksua = $_POST['maksua'];
     $tenksua = $_POST['tenksua'];
     $sdtksua = $_POST['sdtksua'];
     
    $lenh = 'update khach set  hotenk = "'.$tenksua.'",sdt = "'.$sdtksua.'" where mak ='.$maksua;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>