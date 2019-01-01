<?php
    include('../config.php');
    $lenh = 'select p.tenp, ttdp.mak, tt.tentt, ttdp.mattdp, ttdp.datphongtu, ttdp.denngay, ttdp.tongtien,ttdp.chuthich from trangthai tt inner join ttdatphong ttdp on ttdp.matt = tt.matt inner join phong p on ttdp.map = p.map ORDER BY ttdp.mattdp  DESC';
    mysqli_set_charset($conn, 'utf8');
    $lenh2= 'select * from dichvu where madv in (select madv from ctdv where mattdp =)'
?>
        <div class="sec2">
                <h2>Thông Tin</h2>
                <button class="themtt">Thêm</button>
                <input type="text" id="nhaptk" placeholder="nhập mã khách tìm" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:5%;">phòng</th>
                    <th style="width:5;">Id khách</th> 
                    <th style="width:5%;">Id</th>
                    <th style="width:5%;">dịch vụ</th> <!--riêng-->
                    <th style="width:5%;">trạng thái</th>
                    <th style="width:20%;">từ ngày</th>
                    <th style="width:20%;">đến ngày</th>
                    <th style="width:20%;">tổng tiền</th>
                    <th style="width:25%;">chú thích</th>
                  </tr>
                  <?php $kq = mysqli_query($conn, $lenh);
                            while($row = mysqli_fetch_assoc($kq)){
                 ?>
                  <tr> <!--thay đổi-->
                    <!--select p.tenp, ttdp.mak, tt.tentt, ttdp.mattdp, ttdp.datphongtu, ttdp.denngay, ttdp.tongtien,ttdp.chuthich from trangthai tt inner join ttdatphong ttdp on ttdp.matt = tt.matt inner join phong p on ttdp.map = p.map-->
                    <td><?php echo $row['tenp']; ?></td>
                    <td><?php echo $row['mak']; ?></td>
                    <td><?php echo $row['mattdp']; ?></td>
                    
                    <?php
                         $lenh2= 'select * from dichvu where madv in (select madv from ctdv where mattdp = '.$row['mattdp'].')';
                         $kq2 = mysqli_query($conn, $lenh2);
                         $dv = '';
                         while($row1 = mysqli_fetch_assoc($kq2)){
                             $dv = $dv.','.$row1['tendv'];
                         }
                    ?>
                    <td><?php echo $dv ?></td>
                    <td><?php echo $row['tentt']; ?></td>
                    <td><?php echo $row['datphongtu']; ?></td>
                    <td><?php echo $row['denngay']; ?></td>
                    <td><?php echo $row['tongtien']; ?></td>
                    <td><?php echo $row['chuthich']; ?></td>
                    <td>
                        <div>
                            <button value="<?php echo $row['mattdp']; ?>" class="nutsua">update</button>
                            <button value="<?php echo $row['mattdp']; ?>" class="nutxoa">xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                </table>
        </div>
        <!-- hien cap nhat -->
        <div class="themsuadl1" id="suadl">
            <div class="themsuadl">
                <h2 style="text-align:center">cập nhật dữ liệu</h2> <!--thay đổi-->
                <label  >phòng</label>   <input id="mattdpsua" type="text" required> <br>
                <label  >khách</label>   <input id="maksua" type="text" required> <br>
                <label >Dịch vụ</label>   <input id="mattsua" type="text" required> <br>
                <label  >id</label>   <input id="mapsua" type="text" required> <br>
                <label  >từ ngày</label>   <input id="datphongtusua" type="date" required> <br>
                <label  >đến ngày</label>   <input id="denngaysua" type="date" required> <br>
                <label  >tổng tiền</label>   <input id="chuthichsua" type="text"> <br>
                <label  >chú thích</label>   <input id="chuthichsua" type="text"> <br>
            <button id="huysua">thoát</button>
            <button id="xacnhansuaDON">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <input id="chuthichxoadp" type="text" required> <br>
                <button id="xacnhanxoaDON">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>