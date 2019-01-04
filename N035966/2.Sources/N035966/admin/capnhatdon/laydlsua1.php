<?php
    include('../config.php');
    $mattdp = $_POST['id'];
    $lenh = 'select p.tenp, ttdp.mak, tt.tentt, ttdp.mattdp, ttdp.datphongtu, ttdp.denngay, ttdp.tongtien,ttdp.chuthich from trangthai tt inner join ttdatphong ttdp on ttdp.matt = tt.matt inner join phong p on ttdp.map = p.map where mattdp ='.$mattdp;
    mysqli_set_charset($conn, 'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
    $response =[$row['tenp'],$row['mak'],$row['datphongtu'],$row['denngay'],$row['tongtien'] ,$row['chuthich']];
    echo $response[0].','.$response[1].','.$response[2].','.$response[3].','.$response[4].','.$response[5];
    
?>