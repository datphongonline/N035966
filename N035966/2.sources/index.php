<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khách Sạn ABC</title>
    <link rel="stylesheet" href="btl.css">
    <script src="jquery.js"></script>
    <script src="btl.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="image/logo.png" alt="">
        </div>
        <div class="muc">
            <ul>
                <li><img src="image/leTan.png" alt=""></li>
                <li><img src="image/nhaHang.png" alt=""></li>
                <li><img src="image/thangMay.png" alt=""></li>
                <li><img src="image/wifi.png" alt=""></li>
            </ul>
        </div>
        <div class="hotro">
            <a href="#">
                <p>Home</p>
            </a>
            <a href="#">
                <p>Hỗ Trợ Khách Hàng</p>
            </a>
        </div>
        <div class="login">
            <input type="button" id="login" value="đăng nhập">
        </div>
    </header>
    <!--kết thúc header-->
    <div class="slideshow">
        <img id="myImage" src="image/pic1.jpg" alt="">
        <img id="myImage2" src="" alt="">
    </div>
    <!------------------------->
    <section>
        <div class="formlogin" id="formlogin" method='POST'>
            <form action="#">
                <div class="thoat" id="thoat">x</div>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="nhập tên" name="username" id="username" required> <br>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="nhập mật khẩu" name="password" id="password" required> <br>

                <span id="thongbaoloi"></span>
                <input type="button" id="btlogin" value="đăng nhập">
            </form>
        </div>
        <!-- -------form đăng nhập------->
        <div class="gioithieutn">
            <div class="ten">
                <span> Saigon Hotel</span>
            </div>
            <div class="diachi">
                <img src="image/pic1.jpg" alt="">
                <p>84A Bùi Thị Xuân, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh, Việt Nam</p>
            </div>

            <fieldset class="tiennghi">
                <legend>Tiện Nghị Khách Sạn</legend>
                <div class="tiennghi1">
                    <div>
                        <img src="image/leTan.png" alt="">
                        <p>Lễ Tân 24h</p>
                    </div>
                    <div>
                        <img src="image/thangMay.png" alt="">
                        <p>Thang Máy</p>
                    </div>
                    <div>
                        <img src="image/nhaHang.png" alt="">
                        <p>Nhà Hàng</p>
                    </div>
                    <div>
                        <img src="image/dauXe.png" alt="">
                        <p> Đỗ Xe</p>
                    </div>
                    <div>
                        <img src="image/hoBoi.png" alt="">
                        <p>Hồ Bơi</p>
                    </div>
                </div>
            </fieldset>

        </div>
        <!---->
        <div class="timphong">
            <div class="tuychonTimkiem">
                <img src="image/pic1.jpg" alt="">
                <div class="mttuychonTimkiem">
                    <p>Nhận Phòng Từ Ngày</p>
                    <input type="date" name="ngaynhan" id="ngaynhan">
                </div>
            </div>
            <div class="tuychonTimkiem">
                <img src="image/pic1.jpg" alt="">
                <div class="mttuychonTimkiem">
                    <p> Ngày trả</p>
                    <input type="date" name="ngaytra" id="ngaytra">
                </div>
            </div>
            <div class="tuychonTimkiem">
                <img src="image/pic1.jpg" alt="">
                <div class="mttuychonTimkiem">
                    <p>Số Người</p>
                    <select name="sogiuong" id="sogiuong">
                        <option value="1">1 giường</option>
                        <option value="2">2 Khách</option>
                        <option value="3">3 Khách</option>
                        <option value="4">4 Khách</option>
                        <option value="5">5 Khách</option>
                    </select>
                </div>
            </div>
            <!-- <div class="tuychonTimkiem">
                <img src="image/pic1.jpg" alt="">
                <div class="mttuychonTimkiem">
                    <p>Số Lượng Phòng</p>
                    <select name="phong" id="phong">
                        <option value="mot">1 Phòng</option>
                        <option value="hai">2 Phòng</option>
                        <option value="ba">3 Phòng</option>
                        <option value="bon">4 Phòng</option>
                        <option value="nam">5 Phòng</option>
                    </select>
                </div>

            </div> -->
            <button class="nuttimkiem" id="nuttimkiem">Tìm Kiếm</button>
        </div>

        <fieldset class="thongtinphong">
            <h2>Danh Sách Phòng</h2>

            <!-- hiện danh sách phòng-->
            <div class='dsphong' id="dsphong">
            
            </div>
        </fieldset>
        <fieldset class="gioithieu">
            <legend>Giới Thiệu</legend>
            <h2>Giờ nhận và trả phòng</h2>
            <p>Giờ nhận phòng: 14:00 <br> Giờ trả phòng: 12:00</p>
            <h2>Vị trí</h2>
            <p>The Herriott Hotel & Suite toạ lạc tại khu vực / thành phố An Hải Bắc. <br>

                khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Đà Nẵng (DAD) 5,24 km. <br>

                Có rất nhiều điểm tham quan lân cận như Pham Van Dong Beach ở khoảng cách 0,92 km, và Cầu sông Hàn ở
                khoảng cách 1,55 km. </p>
            <h2>Thông tin về The Herriott Hotel & Suite</h2>
            <p> Không chỉ sở hữu vị trí giúp quý khách dễ dàng ghé thăm những địa điểm lý thú trong chuyến hành trình,
                Mayana Hotel cũng sẽ mang đến cho quý khách trải nghiệm lưu trú mỹ mãn. <br>

                Dành cho những du khách muốn du lịch thoải mái cùng ngân sách tiết kiệm, Mayana Hotel sẽ là lựa chọn
                lưu trú hoàn hảo, nơi cung cấp các tiện nghi chất lượng và dịch vụ tuyệt vời. <br>

                Dành trọn những giây phút đặc biệt cùng nửa kia của mình tại Mayana Hotel. Hãy khiến kỳ nghỉ của quý
                khách thành một trải nghiệm đáng nhớ với tất cả những dịch vụ và tiện nghi mà khách sạn mang lại. <br>

                Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý
                khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Mayana Hotel

                Tọa lạc gần sân bay, Mayana Hotel là nơi nghỉ ngơi lý tưởng trong lúc quý khách đang chờ chuyến bay kế
                tiếp. Quý khách có thể tận hưởng không gian nghỉ dưỡng vừa ý nơi đây trong quá trình quá cảnh. <br>

                Từ sự kiện doanh nghiệp đến họp mặt công ty, Mayana Hotel cung cấp đầy đủ các dịch vụ và tiện nghi đáp
                ứng mọi nhu cầu của quý khách và đồng nghiệp.

                Hãy tận hưởng thời gian vui vẻ cùng cả gia đình với hàng loạt tiện nghi giải trí tại Mayana Hotel, một
                khách sạn tuyệt vời phù hợp cho mọi kỳ nghỉ bên người thân.

                Nếu dự định có một kỳ nghỉ dài, thì Mayana Hotel chính là lựa chọn dành cho quý khách. Với đầy đủ tiện
                nghi với chất lượng dịch vụ tuyệt vời, Mayana Hotel sẽ khiến quý khách cảm thấy thoải mái như đang ở
                nhà vậy.

                Du lịch một mình cũng không hề kém phần thú vị và Mayana Hotel là nơi thích hợp dành riêng cho những ai
                đề cao sự riêng tư trong kỳ lưu trú. <br>

                Dịch vụ tuyệt vời, cơ sở vật chất hoàn chỉnh và các tiện nghi khách sạn cung cấp sẽ khiến quý khách
                không thể phàn nàn trong suốt kỳ lưu trú tại Mayana Hotel.

                Quầy tiếp tân 24 giờ luôn sẵn sàng phục vụ quý khách từ thủ tục nhận phòng đến trả phòng hay bất kỳ yêu
                cầu nào. Nếu cần giúp đỡ xin hãy liên hệ đội ngũ tiếp tân, chúng tôi luôn sẵn sàng hỗ trợ quý khách.
                <br>

                Sóng WiFi phủ khắp các khu vực chung của khách sạn cho phép quý khách luôn kết nối với gia đình và bè
                bạn.

                Mayana Hotel là khách sạn sở hữu đầy đủ tiện nghi và dịch vụ xuất sắc theo nhận định của hầu hết khách
                lưu trú.

                Với những tiện nghi sẵn có Mayana Hotel thực sự là một nơi lưu trú hoàn hảo. </p>
        </fieldset>


        <!-- hiện thông tin và đặt phòng-->
        <div id="hiennd">
            
        </div>
    </section>
    <footer>
        <img src="" alt="">

    </footer>
    
</body>

</html>