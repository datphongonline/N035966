<?php
                 include('config.php');
                 $lenh2 = "select * from phong 
                           where sogiuong =".$_POST['sogiuong']." and  map not in(select map from ttdatphong 
                                                    where (datphongtu <= '".$_POST['ngaynhan']."' and denngay >= '".$_POST['ngaynhan']."') or (datphongtu <= '".$_POST['ngaytra']."' and denngay >='".$_POST['ngaytra']."'))";
                 mysqli_set_charset($conn,'utf8');
                 $kq2 = mysqli_query($conn,$lenh2);
                 $chuaid = '';
                 
                 while($row = mysqli_fetch_assoc($kq2)){
            ?>  

            <div class="phong">
                <div class=phong2 id="<?php echo $row['map']; $chuaid = $row['tenp'];?>">
                    <img src="image/mot.jpeg" alt="">
                    <ul>
                        <li><?php echo 'phòng '.$chuaid ?></li>
                        <li><?php if($row['trangthai']==1) echo 'trạng thái: sẵn sàng cho đặt phòng' ?></li>
                        <li>Thanh toán tại khách sạn</li>
                    </ul>
                </div>
            </div>
            <?php };?>