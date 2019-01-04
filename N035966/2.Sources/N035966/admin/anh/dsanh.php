<?php
    include('../config.php');
    $lenh = 'select * from anh';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo mã phòng" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">Mã ảnh</th>
                    <th style="width:25%;">Mã phòng</th>
                    <th style="width:25%;">hình ảnh</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['maanh']; ?></td>
                    <td><?php echo $row['map']; ?></td>
                    <td><?php echo $row['hinhanh']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['maanh']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['maanh']; ?>" class="nutxoa">Xóa</button>
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
                <label  >mã phòng</label>   <input id="mapthem" type="text" required> <br>
                <label >hình ảnh</label>   <input id="hathem" type="text" required> <br>
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemA">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <label >mã ảnh</label>   <input id="maasua" type="text" required> <br>
            <label >mã phòng</label>   <input id="mapsua" type="text" required> <br>
            <label >hình ảnh</label>   <input id="hasua" type="text" required> <br>
            
            <button id="huysua">hủy</button>
            <button id="xacnhansuaA">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaA">Ok</button> <!--thay đổi-->
                <button id="huyxoa">hủy</button>
            </div>
        </div>