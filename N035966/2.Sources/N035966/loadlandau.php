<?php
              include('config.php');
                 $lenh = 'select * from phong limit 6';
                 mysqli_set_charset($conn,'utf8');
                 $kq = mysqli_query($conn,$lenh);
                 $chuaid = '';
                 while($row = mysqli_fetch_assoc($kq)){
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
            <?php }?>