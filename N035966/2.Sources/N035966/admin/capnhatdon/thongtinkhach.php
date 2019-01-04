<?php 
    include('../config.php');
    $mak = $_POST['mak'];
    $lenh = 'select * from khach where mak = '.$mak;
    mysqli_set_charset($conn,'utf8');
    $kq = mysqli_query($conn, $lenh);
    $row = mysqli_fetch_assoc($kq);
?>
<div>
    <p>họ tên khách: <span><?php echo $row['hotenk']?></span> </p>
    <p>số điện thoại: <span><?php echo $row['sdt']?></span></p>
</div>