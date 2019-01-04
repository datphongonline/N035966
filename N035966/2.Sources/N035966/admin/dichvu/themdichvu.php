<?php
    include('../config.php');
     $tendvthem = $_POST['tendvthem'];
     $giadvthem = $_POST['giadvthem'];
     
    $lenh = 'insert dichvu value(NULL,"'.$tendvthem.'",'.$giadvthem.')';
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        echo '1';
    }else echo '0';
?>