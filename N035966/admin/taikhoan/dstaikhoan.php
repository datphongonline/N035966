<?php
    include('../config.php');
    $lenh = 'select * from taikhoan';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Tài Khoản</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo tên đăng nhập" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">mã tài khoản</th>
                    <th style="width:25%;">tên đăng nhập</th>
                    <th style="width:25%;">mật khẩu</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['matk']; ?></td>
                    <td><?php echo $row['tendangnhap']; ?></td>
                    <td><?php echo $row['matkhau']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['matk']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['matk']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them tai khoan-->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> <!--thay đổi-->
                <label >tên đăng nhập</label>   <input id="tentkthem" type="text" required> <br>
                <label >mật khẩu</label>   <input id="mkthem" type="text" required> <br>
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemTK">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat tài khoản -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <label >mã tài khoản</label>   <input id="matksua" type="text" required> <br>
            <label >tên đăng nhập</label>   <input id="tentksua" type="text" required> <br>
            <label >mật khẩu</label>   <input id="mksua" type="text" required> <br>
           
            
            <button id="huysua">hủy</button>
            <button id="xacnhansuaTK">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa tài khaonr-->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaTK">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>