<?php
    include('../config.php');
    $lenh = 'select * from tiennghi';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo tên" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header">
                    <th style="width:30%;">Mã Tiện Nghi</th>
                    <th style="width:30%;">Tiện Nghi</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr>
                    <td><?php echo $row['matn']; ?></td>
                    <td><?php echo $row['tentn']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['matn']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['matn']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them  -->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2>
                <label >tên tiện nghi</label>   <input id="tentnthem" type="text" required> <br>
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthem">OK</button>
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2>
            <label >mã tiện nghi</label>   <input id="matnsua" type="text" required> <br>
            <label >tên tiện nghi</label>   <input id="tentnsua" type="text" required> <br>
            
            <button id="huysua">hủy</button>
            <button id="xacnhansua">OK</button>
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoa">Ok</button>
                <button id="huyxoa">hủy</button>
            </div>
        </div>