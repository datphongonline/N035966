
    <?php  
    //select.php  
    if(isset($_POST["layid"]))
    {
        include('config.php');
     // $connect = mysqli_connect("localhost", "root", "", "qlthuvien");
     $lenh2 = 'select hinhanh from anh where maanh'.$_POST['layid'];
     $lenh3 = 'select tentn from tiennghi where matn in(select matn from cttn where map = "'.$_POST['layid'].'")';
     $lenh4 = 'select map,giap from phong where map ='.$_POST['layid'];
     mysqli_set_charset($conn,'utf8');
     $kq3 = mysqli_query($conn,$lenh3);
     ?>
    <form class="hiendatphong" id="hiendatphong" method="POST" action='thanhtoan/hoadontt.php'>
        <div class="ctphong" id="ctphong">
            <div class="thoat" id="thoat1">x</div>
            <div class="anhcuaphong">
                <img src="image/chitiet/anh1.jpeg" alt="">
            </div>
            <div class="chitiettungphong">
                <h2>Tổng quan phòng</h2>
                <ul>
                    <li>Diện tích phòng 22.0 m2</li>
                    <li>Kiểu giường 1 giường đôi hoặc 2 giường đơn</li>
                </ul>
                <h2>Tiện nghi cơ bản</h2>

                <ul>
                    <?php  while($row3 = mysqli_fetch_assoc($kq3)){ ?>
                    <li>
                        <?php echo $row3["tentn"] ?>
                    </li>
                    <?php }?>
                </ul>

                <h2>Phòng tắm</h2>
                <ul>
                    <li> Phòng tắm riêng</li>
                    <li>Bộ vệ sinh cá nhân</li>
                    <li> Vòi tắm đứng</li>

                </ul>
                <?php 
                  $kq4 = mysqli_query($conn,$lenh4);
                  while($row4 = mysqli_fetch_assoc($kq4)){
              ?>
                <h2>Thông Tin</h2>

                <p>- mã phòng : <span name="map" id="map">
                        <?php echo $row4['map']?></span> </p>
                <p>- Ngày nhận phòng: <span name="ngaynhan1" id="ngaynhan1"><?php echo $_POST['ngaynhan']?></span></p>
                <p>- số ngày đặt: <span name="ngaytra1" id="ngaytra1"><?php echo $_POST['ngaytra']?></span></p>

                <div style="display:none">
                 <!--chứa dữ liệu-->
                    <input type="text" name="map" value="<?php echo $row4['map']?>">
                    <input type="text" name="ngaynhan" value="<?php echo $_POST['ngaynhan']?>">
                    <input type="text" name="ngaytra" value="<?php echo $_POST['ngaytra']?>">
                </div>

            </div>
            <div class="giatiendatphong">
                <p> <span id="tienthuephong"><?php echo $row4['giap']?></span> VND/ngay</p>
                <button type="submit" name="datphong">Đặt Ngay</button>
            </div>
            <?php }?>
        </div>
    </form>
    <?php }?>
    
