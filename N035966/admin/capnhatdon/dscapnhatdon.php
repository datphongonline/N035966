<?php
    include('../config.php');
    $lenh = 'select p.tenp, ttdp.mak, tt.tentt, ttdp.mattdp, ttdp.datphongtu, ttdp.denngay, ttdp.tongtien,ttdp.chuthich from trangthai tt inner join ttdatphong ttdp on ttdp.matt = tt.matt inner join phong p on ttdp.map = p.map ORDER BY ttdp.mattdp  DESC';
    mysqli_set_charset($conn, 'utf8');
?>
        <div class="sec2" id="thaythetk">
                <h2>Thông Tin</h2>
                <button id="thongtinkhach" class="luachon">kiểm tra khách hàng</button> <br>
                <button id="btngaynhan" class="luachon">ngày nhận</button>  <input type="date" id="ttngaynhan"> <span id="tbngaynhan"></span> <br>
                <button id="btngaytra" class="luachon">ngày trả</button><input type="date" id="ttngaytra">  <span id="tbngaytra"></span> <br>
                <button id="bttrangthai" class="luachon">trạng thái</button> 
                <select id="xemtheott">
                    <?php $xemtt = 'select * from trangthai';
                          $kq5 = mysqli_query($conn, $xemtt);
                          while($kqxem = mysqli_fetch_assoc($kq5)){
                    ?>
                    <option value="<?php echo $kqxem['matt'] ?>"> <?php echo $kqxem['tentt']?></option>
                          <?php }?>
                </select>
                <!-- <input type="date" id="xemtheott"> -->
                
                <input type="text" id="nhaptk" placeholder="nhập mã khách tìm" title="Type in a name">
                
                <table id="myTable">
                  <tr class="header"> <!--thay đổi-->
                    <th style="width:5%;">phòng</th>
                    <th style="width:5;">Id khách</th> 
                    <th style="width:5%;">Id</th>
                    <th style="width:20%;">dịch vụ</th> <!--riêng-->
                    <th style="width:5%;">trạng thái</th>
                    <th style="width:20%;">từ ngày</th>
                    <th style="width:20%;">ngày trả</th>
                    <th style="width:20%;">tổng tiền</th>
                    <th style="width:25%;">chú thích</th>
                  </tr>
                <!-- <div id="thaythetk">   đẩy dữ liệu tìm kiếm theo yêu cầu-->
               
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
                             $dv = $dv.', '.$row1['tendv'];
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
                            <button value="<?php echo $row['mattdp']; ?>" class="nutsuadon1 nutsuacs">update</button>
                            <button value="<?php echo $row['mattdp']; ?>" class="nutxoadon1 nutxoacs">xóa</button>
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
                <label  >phòng</label>   <input id="tenpsua" type="text" required> <br>
                <label  >khách</label>   <input id="maksua" type="text" required> <br>
                <label >ID</label>   <input id="mattdpsua" type="text" required> <br>

                 <label  >thêm dịch vụ</label>  <select id="tendvsua">  <!-- hien ds dich vu -->
                 <option value="">...</option>
                 <?php 
                     $lenh3 = 'select * from dichvu';
                     $kq3 = mysqli_query($conn, $lenh3);
                     while($row3 = mysqli_fetch_assoc($kq3)){
                 ?>
                 
                       <option value="<?php echo $row3['madv'] ?>"><?php echo $row3['tendv'] ?></option>
                 
                     <?php } ?>
                     </select> <br>

                <label  >trạng thái</label>  <select id="tenttsua"> <!-- ds trang thai -->
                
                <?php 
                    $lenh4= 'select * from trangthai';
                    $kq4 = mysqli_query($conn, $lenh4);
                    while($row4 = mysqli_fetch_assoc($kq4)){
                ?>
                
                      <option value="<?php echo $row4['matt']?>"> <?php echo $row4['tentt']?> </option>
                      <?php }?>
                </select>  <br>
                    
                <label  >từ ngày</label>   <input id="datphongtusua" type="date" required> <br>
                <label  >đến ngày</label>   <input id="denngaysua" type="date" required> <br>
                <label  >tổng tiền</label>   <input id="tongtiensua" type="text"> <br>
                <label  >chú thích</label>   <input id="chuthichsua" type="text"> <br>
            <button id="huysua">thoát</button>
            <button id="xnsuadon">OK</button><!--thay đổi-->
            <p id="tbsua"></p>
            </div>
        </div>
        
        <!-- hien xoa -->
        <div class="xoadl1" id="xoadl">
            <div class="xoadl">
                <h3 id="tbxoa" style="text-align:center">xác nhận xóa dữ liệu</h3>
                <input id="chuthichxoaDON" type="text" required> <br>
                <button id="xacnhanxoaDON">Ok</button> <!--thay đổi-->
                <button id="huyxoa">thoát</button>
            </div>
        </div>

        <div class="ktdlk1" id="ktdlk1">
            <div class="ktdlk">
                <h3 style="text-align:center">kiểm tra thông tin khách hàng</h3>
                <label>nhập mã khách</label> <input id="makkt" type="text" required> <br>
                 <!--thay đổi-->
                 
                <button id="thoatktdlk">thoát</button>
                <button id="hienktdlk">hiện thông tin</button>
                <div id="tbkt" style="clear: right">thông tin tìm....</div>
            </div>
        </div>