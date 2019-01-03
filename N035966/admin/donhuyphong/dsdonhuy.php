<?php
    include('../config.php');
    $lenh = 'select * from huydp';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Hóa Đơn Hủy</h2>
                <!-- <button class="themtt">Thêm</button> -->
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo mã khách" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:20%;">mã hủy hợp đồng</th>
                    <th style="width:20%;">mã khách</th>
                    <th style="width:20%;">mã phòng</th>
                    <th style="width:20%;">chú thích</th>
                    <th style="width:20%;">ngày hủy</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['mahuydp']; ?></td>
                    <td><?php echo $row['mak']; ?></td>
                    <td><?php echo $row['map']; ?></td>
                    <td><?php echo $row['chuthich']; ?></td>
                    <td><?php echo $row['ngayhuy']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['mahuydp']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['mahuydp']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them -->
        <!-- <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> 
                <label >tên đăng nhập</label>   <input id="tentkthem" type="text" required> <br>
                <label >mật khẩu</label>   <input id="mkthem" type="text" required> <br>
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemTK">OK</button>
                <p id="tbthem"></p>
                </div>
        </div> -->
        <!-- hien cap nhat hủy đặt phongf -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <label >mã hủy đặt phòng</label>   <input id="mahuydpsua" type="text" required> <br>
            <label >mã khách</label>   <input id="maksua" type="text" required> <br>
            <label >mã phòng</label>   <input id="mapsua" type="text" required> <br>
            <label >chú thích</label>   <input id="chuthichsua" type="text" required> <br>
            <label >ngày hủy</label>   <input id="ngayhuysua" type="text" required> <br>
            
            <button id="huysua">hủy</button>
            <button id="xacnhansuaHDP">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa huy đătj phòng-->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaHDP">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>