<?php
    include('../config.php');
    $lenh = 'select * from ttdatphong';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="nhập mã khách tìm" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:5%;">Mã trạng thái đặt</th>
                    <th style="width:5;">mã khách</th>
                    <th style="width:5%;">Mã trạng thái</th>
                    
                    <th style="width:5%;">mã phòng</th>
                    <th style="width:20%;">đặt phòng từ</th>
                    <th style="width:20%;">đến ngày</th>
                    <th style="width:25%;">chú thích</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['mattdp']; ?></td>
                    <td><?php echo $row['mak']; ?></td>
                    <td><?php echo $row['matt']; ?></td>
                    <td><?php echo $row['map']; ?></td>
                    <td><?php echo $row['datphongtu']; ?></td>
                    <td><?php echo $row['denngay']; ?></td>
                    <td><?php echo $row['chuthich']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['mattdp']; ?>" class="nutsuadp2 nutsuacs">update</button>
                            <button value="<?php echo $row['mattdp']; ?>" class="nutxoadp2 nutxoacs">xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them  -->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> <!--thay đổi-->
                <label >mã trạng thái</label>   <input id="mattthem" type="text" required> <br>
                <label  >Mã khách</label>   <input id="makthem" type="text" required> <br>
                <label  >Mã phòng</label>   <input id="mapthem" type="text" required> <br>
                <label  >đặt phòng từ</label>   <input id="datphongtuthem" type="date" required> <br>
                <label  >đến ngày</label>   <input id="denngaythem" type="date" required> <br>
                <label  >chú thích</label>   <input id="chuthichthem" type="text"> <br>
                
                <button id="huythem">thoát</button>
                <button id="xacnhanthemDP">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
                <label  >Mã trạng thái đặt</label>   <input id="mattdpsua" type="text" required> <br>
                <label  >Mã khách</label>   <input id="maksua" type="text" required> <br>
                <label >mã trạng thái</label>   <input id="mattsua" type="text" required> <br>
                
                <label  >Mã phòng</label>   <input id="mapsua" type="text" required> <br>
                <label  >đặt phòng từ</label>   <input id="datphongtusua" type="date" required> <br>
                <label  >đến ngày</label>   <input id="denngaysua" type="date" required> <br>
                <label  >chú thích</label>   <input id="chuthichsua" type="text"> <br>
            
            <button id="huysua">thoát</button>
            <button id="xacnhansuaDP">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <input id="chuthichxoadp" type="text" required> <br>
                <button id="xacnhanxoaDP">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>