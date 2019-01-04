<?php 
    include('config.php');
    $sdt = $_POST['sdt'];
    $lenh = 'select ttdp.mattdp, k.hotenk, k.sdt, p.tenp, ttdp.datphongtu, ttdp.denngay from khach k inner join ttdatphong ttdp on ttdp.mak = k.mak inner join phong p on p.map = ttdp.map where k.sdt = "'.$sdt.'" and ttdp.matt = 1';
    mysqli_set_charset($conn,'utf8');
    $kq = mysqli_query($conn, $lenh);
    
    
    // tenk, sdt, ten phong, ngay nhan, ngay tra, ten tt
?>
<div>
<?php while($row = mysqli_fetch_assoc($kq)){ ?>
     <div>
     <p>họ tên khách: <span><?php echo $row['hotenk']?></span> </p>
    <p>số điện thoại: <span><?php echo $row['sdt']?></span></p>
    <p>số phòng: <span><?php echo $row['tenp']?></span></p>
    <p>số điện thoại: <span><?php echo $row['sdt']?></span></p>
    <p>ngày nhận: <span><?php echo $row['datphongtu']?></span></p>
    <p>ngày trả: <span><?php echo $row['denngay']?></span></p>
    <button value="<?php echo $row['mattdp'];?>" class="huydpkt">  hủy đặt phòng</button> <br> <br> <br>
     </div>
    

    <?php } ?>
</div>
    