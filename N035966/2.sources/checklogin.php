<?php
    include('config.php');
    $tentaikhoan = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    
    
    $lenh = 'select * from taikhoan where tendangnhap ="'.$tentaikhoan.'" and matkhau ="'.$matkhau.'"';
    $kq = mysqli_query($conn,$lenh);
    if(mysqli_num_rows($kq)>0){
//        header('Location: http://testform/quanly.php/'); trả lại dữ liệu như gọi đến 
        echo 1;
    }else{
        echo 0;
    } 
?>