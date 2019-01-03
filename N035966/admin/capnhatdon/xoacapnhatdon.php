<?php
    include('../config.php');
     $id = $_POST['id'];
     $chuthichhuydp = $_POST['chuthichxoaDON'];
     $lenh = 'select * from ttdatphong where mattdp ='.$id;
    $lenh1 = 'delete from ttdatphong where mattdp ='.$id;
    $lenh3 = 'delete from ctdv where mattdp ='.$id;
    mysqli_set_charset($conn,'utf8');
    $kq =  mysqli_query($conn, $lenh);
    if($kq){
        $row = mysqli_fetch_assoc($kq);
        $lenh2 = 'insert huydp value (NULL,'.$row['mak'].','.$row['map'].',"'.$chuthichhuydp.'",curdate(),"'.$row['datphongtu'].'", "'.$row['denngay'].'")';
        $kq2 = mysqli_query($conn, $lenh2);
        if($kq2){
            mysqli_query($conn, $lenh3);
            echo '1';
            mysqli_query($conn, $lenh1);
        }
    }else echo '0';
?>