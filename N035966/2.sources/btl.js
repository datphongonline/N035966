function goidoianh() { // thay đổi ảnh
    var anh = ['image/pic1.jpg', 'image/pic2.jpg', 'image/pic3.jpg'];
    var i = 0;
    var j = 0; // width cua anh tiep theo
    var k = 0;
    setInterval(doianh, 7000);
    function doianh() {
        var ha = document.getElementById("myImage");
        var ha2 = document.getElementById("myImage2");
        if (i==2) {
            i=-1;
            k=0;
            ha2.src = anh[k];
        } else {
            k=i+1;
            ha2.src = anh[k];
        }
        var tg = setInterval(move2, 20);
        function move2() {
                    j++;
                    ha2.style.width = j + '%';
                    if (j == 100) {
                        ha.src = anh[k];
                        j = 0;
                        i++;
                        clearInterval(tg);
                    }
        }
    }
}

function landau() { //load cac phong du lieu khi mo trang
    $.ajax({
        url: 'loadlandau.php',
        method: 'GET',
        success: function (data) {
            $('#dsphong').html(data);
        }
    });
}
$(document).ready(function () {
    goidoianh();    // chạy 
    document.getElementById('login').addEventListener('click',function(){
        document.getElementById('formlogin').style.display = 'block';
    },false)
    document.getElementById('thoat').addEventListener('click', function(){
        document.getElementById('formlogin').style.display = 'none';
    },false);

    landau(); //load du lieu lan dau

    $(document).on('click', '#thoat1', function () {  // dong hien chi tiet phong
        $('#hiendatphong').css({ 'display': 'none' });
    });

    $(document).on('click','#btlogin',function(){ // đăng nhập
        var tendangnhap = $('#username').val();
        var matkhau = $('#password').val();
        if(tendangnhap == ''){
            $('#thongbaoloi').html('bạn chưa nhập tên');
        }else if(matkhau ==''){
            $('#thongbaoloi').html('bạn chưa nhập mật khẩu');
        }else{
            $.ajax({
            url:'checklogin.php',
            method: 'POST',
            data:{
                tendangnhap:tendangnhap,
                matkhau:matkhau
            },
            success:function(response){
                if(response == 1){
                    location.replace('admin/quanly.php');
                    $('#formlogin').css({'display':'none'});
                }else{
                    $('#thongbaoloi').html('tên đăng nhập hoặc mật khẩu không chính xác');
                }
                
            }
        });
        }
        
    });

    $(document).on('click', '.phong2', function () {  //lay id va hien du lieu phong tuong ung
        var layid = $(this).attr('id');
        var ngaynhan = $('#ngaynhan').val();
        var ngaytra = $('#ngaytra').val();
        $.ajax({
            url: 'truyxuat.php',
            method: 'POST',
            data: { layid: layid,
                    ngaynhan: ngaynhan,
                    ngaytra:ngaytra },
            success: function (data) {
                $('#hiennd').html(data);

            }
        });
    });


    $(document).on('click', '#nuttimkiem', function () {  //nut tim kiem
        var sogiuong = $('#sogiuong').val();
        var ngaynhan = $('#ngaynhan').val();
        var ngaytra = $('#ngaytra').val();
        $.ajax({
            url: 'timkiem.php',
            method: 'POST',
            data:{
                sogiuong:sogiuong,
                ngaynhan: ngaynhan,
                ngaytra:ngaytra 
            },
            success: function (data) {
                $('#dsphong').html(data);
            }
        });
    });
});