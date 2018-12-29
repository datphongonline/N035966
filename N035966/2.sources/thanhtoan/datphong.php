<?php
      include('config.php');
      $ngaynhan = $_POST['ngaynhan'];
      $ngaytra = $_POST['ngaytra'];
      $map = $_POST['map'];
      $lenh3 = 'select tentn from tiennghi where matn in(select matn from cttn where map = "'.$map.'")';
      $lenh4 = 'select map,giap from phong where map ='.$map;
       $kq4 = mysqli_query($conn, $lenh4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>đặt phòng</title>
    <link rel="stylesheet" href="datphong.css">
    <script src="jquery.js"></script>
    <script src="datphong.js"></script>
</head>
<body>
    <header>
        <div class= "logo">
            <img src="image/logo.png" alt="">
        </div>
        <div class="giaidoan">
        
        </div>
    </header>
    <section>
        <h2>Đặt Phòng Khách Sạn</h2>
        <div class="ctgia">
            <h2>Chi Tiết Giá</h2>
            <div class="chitiet">
                <h4>khách sạn ABC</h4>
                <?php
                
                 while($row4 = mysqli_fetch_assoc($kq4)){ ?>
                <p>Giá Thuê Phòng:<span id="giathue"><?php echo $row4['giap'] ?></span> (VND/Ngày)</p>
                 <?php }?>
                <p>Phí Dịch Vụ và Phụ Thu Khách Sạn: 0 VND</p>
                <p>số ngày thuê: <span class="songaydat">0</span></p>
            </div>
                <p><b>Tổng Tiền Thanh Toán: </b><span id="tongtien">10000</span> (VND)</p>
        </div>
        <div class="kttt">
            <h3>Kiểm Tra Thông Tin Đặt Phòng</h3>
            <div class="anh">
                <img src="image/anh1.jpeg" alt="">
                <h4>Ambassador Saigon Hotel</h4>
                <p>Thanh toán tại khách sạn</p>
            </div>
            <div class="thongtindat">
                <p>mã phòng: <span id="map1"><?php echo $map ?></span></p>
                <p>Ngày Nhận Phòng: <span id="ngaynhan1"><?php echo $ngaynhan; ?></span></p>
                <p>Ngày trả phòng: <span id="ngaytra1"><?php echo $ngaytra; ?></span></p>
            </div>
            <div class="kieuphong">
                <p>Loại Phòng: <span> tiêu chuẩn </span></p>
                <p>Kiểu Giường: <span>1 giường đôi hoặc 2 giường đơn</span></p>
                <p>Số Lượng Phòng: <span>1</span></p>
            </div>
        </div>
        <fieldset class="thongtin">
            <legend>Thông Tin Của Bạn</legend>


            <form method='POST'>
                <label for="hoTen">Tên Liên Hệ</label><br>
                <input type="text" name="hoTen" id="hoten" required><br>
                <p id="loiTen"></p>
                <p class="vidu">*Nhập tên như trên CMND/hộ chiếu (không dấu)</p>
                <label for="sdt">Số Điện Thoại</label><br>
                <input type="text" name="sdt" id="sdt" required><br>
                <p id="loiSdt"></p>
                <p class="vidu">VD: 901234567 </p>
                <input type="button" value="Đặt Phòng" id="datphong">
                <h3 id="baocao"></h3>
            </form>
        </fieldset>


        <div class="csthanhtoan">
            <h3>Chính sách thanh toán tại khách sạn</h3>
            <p>Hình thức Thanh toán tại Khách sạn cho phép bạn giữ phòng mà không cần thanh toán ngay. Bạn sẽ thanh
                toán toàn bộ chi phí đặt phòng bằng tiền mặt hoặc thẻ khi nghỉ tại khách sạn. </p>
        </div>

    </section>
</body>
</html>