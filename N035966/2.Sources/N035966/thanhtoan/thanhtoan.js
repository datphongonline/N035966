$(document).ready(function(){
    $(document).on('click','#datphong',function(){
        var ngaynhan = $('#ngaynhan1').text()
        var ngaytra = $('#ngaytra1').text();
        var map = $('#map1').text();
        var hoten = $('#hoten').val();
        var sdt = $('#sdt').val();
        $.ajax({
            url:'themhoadon.php',
            method: 'POST',
            data: {
                ngaynhan:ngaynhan,
                ngaytra:ngaytra,
                map:map,
                hoten:hoten,
                sdt:sdt
            },
            success:function(response){

                if(response == 1){
                    alert('đặt phòng thành công');
                }else alert('không thành công hãy ra trang chủ xem lại ngày tìm kiếm');
            }

        })
    });
})