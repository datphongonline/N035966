// function timkiem() { // tim kiem
//     var input, filter, table, tr, td, i, txtValue;
//     input = document.getElementById("myInput");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("myTable");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//       td = tr[i].getElementsByTagName("td")[0];
//       if (td) {
//         txtValue = td.textContent || td.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//           tr[i].style.display = "";
//         } else {
//           tr[i].style.display = "none";
//         }
//       }       
//     }
//   }

$(document).ready(function(){
    alert('thong bao');
    
    document.getElementById('container').addEventListener('click',function(){
        this.classList.toggle('change');
    },false);
    $('#tuychon').click(function(){
        $('#hien').toggle(500);
    });
    $('#tuychon2').click(function(){
        $('#hien2').toggle(500);
    });
    $('#tuychon3').click(function(){
        $('#hien3').toggle(500);
    });
    $('#tuychon4').click(function(){
        $('#hien4').toggle(500);
    });
    $('#container').click(function(){
        $('#menu').toggle(500);
        $('.tenql p').toggle(500);
    });
    //
    $(document).on('keyup','#nhaptk', function(){
        var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nhaptk");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
    })
    //  ----------------------------  phần cập nhật -------------------------
    $(document).on('click','#tiennghi', function(){
        $.ajax({
            url: 'tiennghi/dstiennghi.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });
    $(document).on('click','#anh', function(){
        $.ajax({
            url: 'anh/dsanh.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });
    $(document).on('click','#loaiphong', function(){
        $.ajax({
            url: 'loaiphong/dsloaiphong.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });
    $(document).on('click','#dichvu', function(){
        $.ajax({
            url: 'dichvu/dsdichvu.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });
    $(document).on('click','#trangthai', function(){
        $.ajax({
            url: 'trangthai/dstrangthai.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });
    $(document).on('click','#themdatphong', function(){
        $.ajax({
            url: 'dathuyphong/dsdatphong.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });
    $(document).on('click','#capnhatdon', function(){
        $.ajax({
            url: 'capnhatdon/dscapnhatdon.php',
            method:'GET',
            success: function(response){
                $('#in').html(response);
            }
        });
    });

    // hien thong bao
    $(document).on('click','.themtt', function(){
        $('#themdl').css({'display':'block'});
    });
    //thay đổi
    $(document).on('click','.nutsua',function(){
        $('#suadl').css({'display':'block'});
         var id = $(this).attr('value');
        $('#matnsua').attr('value',id);
    })
    $(document).on('click','.nutxoa', function(){
        $('#xoadl').css({'display':'block'});
        $('#xacnhanxoa').show();
        var id = $(this).attr('value');
        $('#xacnhanxoa').attr('value',id); // chuyển id vào value để xác nhận
    });
    // tat thong bao
    $(document).on('click','#huythem', function(){
        $('#themdl').css({'display':'none'});
    });
    $(document).on('click','#huysua', function(){
       $('#suadl').css({'display':'none'});
    });
    $(document).on('click','#huyxoa', function(){
        $('#xoadl').css({'display':'none'});
    });
    // -------------------- phần tiện nghi-------------------------------------------
    // them tien nghi
    $(document).on('click', '#xacnhanthem', function(){
        var tentnt = $('#tentnthem').val();
        if(tentnt == ''){
            $('#tbthem').html('bạn chưa nhập tên');
            $('#tbthem').css({'color':'red'});
        }
        else{
            $.ajax({
            url: 'tiennghi/themtiennghi.php',
            method: 'POST',
            data:{tentnt : tentnt},
            success: function(response){
                if(response == 1){
                    $('#tbthem').html('đã thêm thành công');
                    $('#tbthem').css({'color':'#006699'});
                    $('#tentnthem').val('');
                }else{
                    $('#tbthem').html('lỗi ..');
                    $('#tbthem').css({'color':'red'});
                }
            }
        });
        }
    });
    // xoa tien nghi 
    $(document).on('click', '#xacnhanxoa', function(){
        var id = $('#xacnhanxoa').attr('value');
            $.ajax({
            url: 'tiennghi/xoatiennghi.php',
            method: 'POST',
            data:{id : id},
            success: function(response){
                if(response == 1){
                    $('#tbxoa').html('xóa thành công');
                    $('#tbxoa').css({'color':'#006699'});
                    $('#xacnhanxoa').hide();
                }
            }
        });
    });
    // sua tien nghi 
    $(document).on('click', '#xacnhansua', function(){
        var matnsua = $('#matnsua').val();
        var tentnsua = $('#tentnsua').val();
        var gtnull = '';
        if(tentnsua == ''){
            $('#tbsua').html('bạn chưa nhập tên');
            $('#tbsua').css({'color':'red'});
        }else{
            $.ajax({
            url: 'tiennghi/suatiennghi.php',
            method: 'POST',
            data:{matnsua : matnsua,
                  tentnsua: tentnsua},
            success: function(response){
                if(response == 1){
                    $('#tbsua').html('sửa thành công');
                    $('#tbsua').css({'color':'#006699'});
                    $('#tentnsua').val('');
                }
            }
        });
        }
            
    });
    //----------------------phần ảnh ----------------------------------
    $(document).on('click','.nutsua',function(){
        $('#suadl').css({'display':'block'});
         var id = $(this).attr('value');
        $('#maasua').attr('value',id);
    })
    $(document).on('click','.nutxoa', function(){
        $('#xoadl').css({'display':'block'});
        $('#xacnhanxoaA').show();
        var id = $(this).attr('value');
        $('#xacnhanxoaA').attr('value',id); // chuyển id vào value để xác nhận
    });
    // them ảnh
    $(document).on('click', '#xacnhanthemA', function(){
        var mapthem = $('#mapthem').val();
        var hathem = $('#hathem').val();
        if(mapthem == '' || hathem == ''){
            $('#tbthem').html('bạn chưa nhập tên');
            $('#tbthem').css({'color':'red'});
        }
        else{
            $.ajax({
            url: 'anh/themanh.php',
            method: 'POST',
            data:{mapthem : mapthem,
                  hathem : hathem},
            success: function(response){
                if(response == 1){
                    $('#tbthem').html('đã thêm thành công');
                    $('#tbthem').css({'color':'#006699'});
                    $('#mapthem').val('');
                    $('#hathem').val('');
                }else{
                    $('#tbthem').html('lỗi. kiểm tra lại');
                    $('#tbthem').css({'color':'red'});
                }
            }
        });
        }
    });
    // xoa ảnh
    $(document).on('click', '#xacnhanxoaA', function(){
        var id = $('#xacnhanxoaA').attr('value');
            $.ajax({
            url: 'anh/xoaanh.php',
            method: 'POST',
            data:{id : id},
            success: function(response){
                if(response == 1){
                    $('#tbxoa').html('xóa thành công');
                    $('#tbxoa').css({'color':'#006699'});
                    $('#xacnhanxoaA').hide();
                }
            }
        });
    });
    // sua ảnh
    $(document).on('click', '#xacnhansuaA', function(){
        var maasua = $('#maasua').val();
        var mapsua = $('#mapsua').val();
        var hasua = $('#hasua').val();
        if(mapsua == '' || hasua == ''){
            $('#tbsua').html('bạn chưa nhập tên');
            $('#tbsua').css({'color':'red'});
        }else{
            $.ajax({
            url: 'anh/suaanh.php',
            method: 'POST',
            data:{mapsua : mapsua,
                  hasua: hasua,
                  maasua : maasua},
            success: function(response){
                if(response == 1){
                    $('#tbsua').html('sửa thành công');
                    $('#tbsua').css({'color':'#006699'});
                    $('#mapsua').val('');
                    $('#hasua').val('');
                }else{
                    $('#tbsua').html('lỗi,hãy kiểm tra lại dữ liệu');
                    $('#tbsua').css({'color':'red'});
                }
            }
        });
        }
            
    });
//------------------------------------ phan dat phong --------------
$(document).on('click','.nutsua',function(){ // thay doi
    $('#suadl').css({'display':'block'});
     var id = $(this).attr('value');
    $('#mattdpsua').attr('value',id);
    $.ajax({
        url: 'dathuyphong/laydlsua.php',
        method: 'POST',
        data: {id : id},
        success: function(response){
            var kq = response.split(',');
            //$response =[$row['matt'], $row['map'], $row['mak'],$row['datphongtu'],$row['denngay'], $row['chuthich']];
            $('#mattsua').attr('value',kq[0]);
            $('#mapsua').attr('value',kq[1]);
            $('#maksua').attr('value',kq[2]);
            $('#datphongtusua').attr('value',kq[3]);
            $('#denngaysua').attr('value',kq[4]);
            $('#chuthichsua').attr('value',kq[5]);

        }
    })
})
$(document).on('click','.nutxoa', function(){ // thay doi
    $('#xoadl').css({'display':'block'});
    $('#xacnhanxoaDP').show();
    var id = $(this).attr('value');
    $('#xacnhanxoaDP').attr('value',id); // chuyển id vào value để xác nhận
});
// them dat phong
$(document).on('click', '#xacnhanthemDP', function(){ // thay doi
    //var mattdpthem = $('#mattdpthem').val();
    var mattthem = $('#mattthem').val();
    var mapthem = $('#mapthem').val();
    var makthem = $('#makthem').val();
    var datphongtuthem = $('#datphongtuthem').val();
    var denngaythem = $('#denngaythem').val();
    var chuthichthem = $('#chuthichthem').val();
    if(mapthem == '' || makthem == '' || datphongtuthem == '' || denngaythem == ''){
        $('#tbthem').html('bạn chưa nhập tên');
        $('#tbthem').css({'color':'red'});
    }
    else{
        $.ajax({
        url: 'dathuyphong/themdatphong.php',
        method: 'POST',
        data:{
            mattthem:mattthem,
            makthem :makthem,
            datphongtuthem : datphongtuthem,
            denngaythem: denngaythem,
            chuthichthem: chuthichthem,  
            mapthem : mapthem
            },
        success: function(response){
            if(response == 1){
                $('#tbthem').html('đã thêm thành công');
                $('#tbthem').css({'color':'#006699'});
                $('#xacnhanthemDP').hide();
            }else{
                $('#tbthem').html('lỗi. kiểm tra lại');
                $('#tbthem').css({'color':'red'});
            }
        }
    });
    }
});
// sua dat phong
$(document).on('click', '#xacnhansuaDP', function(){ // thay doi
    var mattdpsua = $('#mattdpsua').val();
    var mattsua = $('#mattsua').val(); 
    var mapsua = $('#mapsua').val();
    var maksua = $('#maksua').val();
    var datphongtusua = $('#datphongtusua').val();
    var denngaysua = $('#denngaysua').val();
    var chuthichsua = $('#chuthichsua').val();
    if(mapsua == '' || maksua == '' || datphongtusua == '' || denngaysua == ''){
        $('#tbsua').html('bạn chưa nhập tên');
        $('#tbsua').css({'color':'red'});
    }else{
        $.ajax({
        url: 'dathuyphong/suadatphong.php',
        method: 'POST',
        data:{mattdpsua:mattdpsua,
            mattsua: mattsua,
            maksua :maksua,
            datphongtusua : datphongtusua,
            denngaysua: denngaysua,
            chuthichsua: chuthichsua,  
            mapsua : mapsua},
        success: function(response){
            if(response == 1){
                $('#tbsua').html('sửa thành công');
                $('#tbsua').css({'color':'#006699'});
                $('#xacnhansuaDP').hide();
            }else{
                $('#tbsua').html('lỗi,hãy kiểm tra lại dữ liệu');
                $('#tbsua').css({'color':'red'});
            }
        }
    });
    }
        
});
// xoa dat phong
$(document).on('click', '#xacnhanxoaDP', function(){ // thay doi
    var id = $('#xacnhanxoaDP').attr('value');
    var chuthichxoadp = $('#chuthichxoadp').val();
    if(chuthichxoadp==''){
        $('#tbxoa').html('chưa nhập lý do');
        $('#tbxoa').css({'color':'red'});
    }else{
        $.ajax({
        url: 'dathuyphong/xoadatphong.php',
        method: 'POST',
        data:{ chuthichxoadp:chuthichxoadp
               ,id : id},
        success: function(response){
            if(response == 1){
                $('#tbxoa').html('xóa thành công');
                $('#tbxoa').css({'color':'#006699'});
                $('#xacnhanxoaDP').hide();
            }
        }
    });
    }
        
});



});



