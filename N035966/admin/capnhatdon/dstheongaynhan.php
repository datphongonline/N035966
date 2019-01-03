<?php
    include('../config.php');
    $datphongtu = $_POST['ttngaynhan'];
    $lenh = 'select p.tenp, ttdp.mak, tt.tentt, ttdp.mattdp, ttdp.datphongtu, ttdp.denngay, ttdp.tongtien,ttdp.chuthich 
    from trangthai tt inner join ttdatphong ttdp on ttdp.matt = tt.matt inner join phong p on ttdp.map = p.map 
    where datphongtu="'.$datphongtu.'" ORDER BY ttdp.mattdp  DESC;';
    mysqli_set_charset($conn, 'utf8');

?>
            
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
                            <button value="<?php echo $row['mattdp']; ?>" class="nutsua">update</button>
                            <button value="<?php echo $row['mattdp']; ?>" class="nutxoa">xóa</button>
                        </div>
                    </td>
                  </tr>
                          <?php }?>
                  
                </table>
                  