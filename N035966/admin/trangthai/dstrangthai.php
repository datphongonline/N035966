<?php
    include('../config.php');
    $lenh = 'select * from trangthai';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Các Trạng Thái</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo tên trạng thái" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">mã trạng thái</th>
                    <th style="width:25%;">tên trạng thái</th>
                    
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['matt']; ?></td>
                    <td><?php echo $row['tentt']; ?></td>
                    
                    <td>
                        <div>
                            <button value="<?php echo $row['matt']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['matt']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them trạng thái-->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> <!--thay đổi-->
                <label >tên trạng thái</label>   <input id="tenttthem" type="text" required> <br>
                
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemTT">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat trạng thái -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <label >mã trạng thái</label>   <input id="mattsua" type="text" required> <br>
            <label >tên trạng thái</label>   <input id="tenttsua" type="text" required> <br>
           
            
            <button id="huysua">hủy</button>
            <button id="xacnhansuaTT">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa trạng thái-->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaTT">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>