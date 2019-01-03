<?php
    include('../config.php');
    $lenh = 'select * from dichvu';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2">
                <h2>Thông Tin Dịch Vụ</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="tìm kiếm theo tên dịch vụ" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:25%;">mã dịch vụ</th>
                    <th style="width:25%;">tên dịch vụ</th>
                    <th style="width:25%;">giá dịch vụ</th>                    
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <td><?php echo $row['madv']; ?></td>
                    <td><?php echo $row['tendv']; ?></td>
                    <td><?php echo $row['giadv']; ?></td>
                    
                    <td>
                        <div>
                            <button value="<?php echo $row['madv']; ?>" class="nutsua">Sửa</button>
                            <button value="<?php echo $row['madv']; ?>" class="nutxoa">Xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- them  dich vu-->
        <div class="themsuadl1" id="themdl" >
                <div class="themsuadl">
                    <h2 style="text-align:center">thêm dữ liệu</h2> <!--thay đổi-->
                <!--<label >mã dịch vụ</label>   <input id="madvthem" type="text" required> <br>-->
                <label >tên dịch vụ</label>   <input id="tendvthem" type="text" required> <br>
                <label >giá dịch vụ</label>   <input id="giadvthem" type="text" required> <br>
                
                
                <button id="huythem">hủy</button>
                <button id="xacnhanthemDV">OK</button><!--thay đổi-->
                <p id="tbthem"></p>
                </div>
        </div>
        <!-- hien cap nhat dịch vụ-->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
            <!-- <label ></label>   <input id="malpsua" type="text" required> <br> -->
            <label >mã dịch vụ</label>   <input id="madvsua" type="text" required> <br>
            <label >tên dịch vụ</label>   <input id="tendvsua" type="text" required> <br>
            <label >giá dịch vụ</label>   <input id="giadvsua" type="text" required> <br>
            <button id="huysua">hủy</button>
            <button id="xacnhansuaDV">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <button id="xacnhanxoaDV">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>