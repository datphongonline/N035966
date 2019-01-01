<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="quanly.css">
    <script src="jquery.js"></script>
    <script src="quanly.js"></script>
</head>
<body>
    <header>
        <div class="tenql" id="tenql">
             <p>Quản Lý</p>
        </div>
        
        <div class="container" id="container"><!--menu icon-->
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>
    <section class="menu" id="menu">
        <div class="khoi1">
            <button type="button" class="tuychon" id="tuychon">Cập nhật</button>
            <ul id="hien">
                <li id="tiennghi">Tiện Nghi</li>
                <li id="anh">ảnh</li>
                <li id="cnphong">phòng</li>
                <li id="loaiphong">loại phòng</li>
                <li id="dichvu">dịch vụ</li>
                <li id="trangthai">trạng thái</li>
                <li id="taikhoan">Tài Khoản</li>
            </ul>
        </div>
        <div class="khoi1">
                <button type="button" class="tuychon" id="tuychon2">đặt phòng</button>
                <ul id="hien2">
                    <li id="themdatphong">thêm đặt phòng</li>
                    <li id="capnhatdon">cập nhật đơn</li>
                    <li>đơn hủy</li>
                </ul>
        </div>
        <div class="khoi1">
            <button type="button" class="tuychon" id="tuychon3">phòng</button>
            <ul id="hien3">
                <li>Danh sách phòng</li>
            </ul>
        </div>
        <div class="khoi1">
                <button type="button" class="tuychon" id="tuychon4">thống kê</button>
                <ul id="hien4">
                    <li>khách hàng</li>
                    <li>hóa đơn</li>
                    <li>phòng</li>
                </ul>
        </div>

    </section>
    <section id = "in">
    </section>
</body>
</html>