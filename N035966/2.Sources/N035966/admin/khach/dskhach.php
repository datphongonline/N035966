<?php
    include('../config.php');
    $lenh = 'select * from khach';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Khách Hàng</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo họ tên khách" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">mã khách hàng</th>
                    <th style="width:25%;">họ tên khách</th>
                    <th style="width:25%;">số điện thoại</th>
                    
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['mak']; ?></td>
                    <td><?php echo $row['hotenk']; ?></td>
                    <td><?php echo $row['sdt']; ?></td>
                    
                    <td>
                        <div>
                            <button value="<?php echo $row['mak']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['mak']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them khach -->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> <!--thay đổi-->
                <label  >tên khách hàng</label>   <input id="tenkthem" type="text" required> <br>
                <label  >số điện thoại khách</label>   <input id="sdtkthem" type="text" required> <br>
               
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemK">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat khách-->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
                <label >mã khách hàng</label>   <input id="maksua" type="text" required> <br>
            <label >tên khách hàng</label>   <input id="tenksua" type="text" required> <br>
            <label >số điện thoại khách</label>   <input id="sdtksua" type="text" required> <br>

            <button id="huysua">hủy</button>
            <button id="xacnhansuaK">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa khách-->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaK">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>