<?php
    include('../config.php');
    $lenh = 'select * from loaiphong';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Các Loại Phòng</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo tên mã phòng" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">mã loại phòng</th>
                    <th style="width:25%;">tên loại phòng</th>
                    
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['malp']; ?></td>
                    <td><?php echo $row['tenlp']; ?></td>
                    
                    <td>
                        <div>
                            <button value="<?php echo $row['malp']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['malp']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them  loai phong-->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> <!--thay đổi-->
                <label >tên loại phòng</label>   <input id="tenlpthem" type="text" required> <br>
                
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemLP">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <label >mã loại phòng</label>   <input id="malpsua" type="text" required> <br>
            <label >tên loại phòng</label>   <input id="tenlpsua" type="text" required> <br>
           
            
            <button id="huysua">hủy</button>
            <button id="xacnhansuaLP">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaLP">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>