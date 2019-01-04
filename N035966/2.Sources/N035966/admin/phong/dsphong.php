<?php
    include('../config.php');
    $lenh = 'select * from phong';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Các Phòng</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo mã phòng" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">tên phòng</th>
                    <th style="width:25%;">Mã phòng</th>
                    <th style="width:25%;">mã loại phòng</th>
                    <th style="width:25%;">giá phòng</th>
                    <th style="width:25%;">trạng thái </th>
                    <th style="width:25%;">số giường</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['tenp']; ?></td>
                    <td><?php echo $row['map']; ?></td>
                    <td><?php echo $row['malp']; ?></td>
                    <td><?php echo $row['giap']; ?></td>
                    <td><?php echo $row['trangthai']; ?></td>
                    <td><?php echo $row['sogiuong']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['map']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['map']; ?>" class="nutxoa">Xóa</button>
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
                <label  >tên phòng</label>   <input id="tenpthem" type="text" required> <br>
             
                <label  >loại phòng</label>   <input id="malpthem" type="text" required> <br>
                <label >giá phòng</label>   <input id="giapthem" type="text" required> <br>
                <label  >trạng thái</label>   <input id="trangthaithem" type="text" required> <br>
                <label >số giường</label>   <input id="sogiuongthem" type="text" required> <br>
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemP">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <label >tên phòng</label>   <input id="tenpsua" type="text" required> <br>
            <label >mã phòng</label>   <input id="mapsua" type="text" required> <br>
            <label >loại phòng</label>   <input id="malpsua" type="text" required> <br>
            <label >giá phòng</label>   <input id="giapsua" type="text" required> <br>
            <label >trạng thái</label>   <input id="trangthaisua" type="text" required> <br>

        
            <label >số giường</label>   <input id="sogiuongsua" type="text" required> <br>
            
            <button id="huysua">hủy</button>
            <button id="xacnhansuaPhong">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaP">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>