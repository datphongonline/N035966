<?php
    include('../config.php');
     $tenkthem = $_POST['tenkthem'];
     $sdtkthem = $_POST['sdtkthem'];
     
    $lenh = 'insert khach value(NULL,"'.$tenkthem.'","'.$sdtkthem.'")';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>